import React, { useState } from "react"

const cfg = window.cliConfig || {}

const SERVICES = [
  "General Inquiry",
  "Renovations",
  "Remodels",
  "Painting",
  "Stucco",
  "Roofing",
  "Commercial / Multi-Housing",
]

const inputClasses =
  "w-full bg-paper border border-ink/20 px-3.5 py-2.5 text-sm text-ink " +
  "placeholder:text-ink/35 focus:outline-none focus:border-brand " +
  "focus:ring-1 focus:ring-brand transition-colors"

function Field({ label, htmlFor, required, children }) {
  return (
    <label className="block" htmlFor={htmlFor}>
      <span className="cli-spec text-silver">
        {label}
        {required && <span className="text-brand"> *</span>}
      </span>
      <div className="mt-1.5">{children}</div>
    </label>
  )
}

/* variant: "full" (página de contacto) | "card" (panel del hero) */
function ContactForm({ variant = "full" }) {
  const isCard = variant === "card"
  const [status, setStatus] = useState("idle") // idle | sending | success | error
  const [values, setValues] = useState({
    name: "",
    phone: "",
    email: "",
    service: SERVICES[0],
    message: "",
    terms: false,
    company: "", // honeypot
  })

  const set = key => e =>
    setValues(v => ({
      ...v,
      [key]: e.target.type === "checkbox" ? e.target.checked : e.target.value,
    }))

  const submit = async e => {
    e.preventDefault()
    if (status === "sending") return
    setStatus("sending")

    try {
      const data = new FormData()
      data.append("action", "cli_contact")
      data.append("nonce", cfg.contactNonce || "")
      Object.entries(values).forEach(([k, v]) => data.append(k, v))

      const res = await fetch(cfg.ajaxUrl || "/wp-admin/admin-ajax.php", {
        method: "POST",
        body: data,
      })
      const json = await res.json()
      if (!res.ok || !json.success) throw new Error("send failed")

      setStatus("success")
      setValues(v => ({ ...v, name: "", phone: "", email: "", message: "", terms: false }))
    } catch (err) {
      setStatus("error")
    }
  }

  if (status === "success") {
    return (
      <div className={isCard ? "p-6 lg:p-7" : "p-7 lg:p-10"}>
        <p className="cli-spec text-brand-2">Request received</p>
        <h3 className="mt-2 font-display font-extrabold text-ink text-2xl tracking-tight">
          Thank you!
        </h3>
        <p className="mt-3 text-ink/70 leading-relaxed">
          We got your request and will get back to you with next steps.
          Need it faster? Call us at{" "}
          <a href={"tel:" + (cfg.phoneRaw || "+15055181965")} className="text-brand-2 font-semibold">
            {cfg.phone || "(505) 518-1965"}
          </a>
          .
        </p>
      </div>
    )
  }

  return (
    <form onSubmit={submit} className={isCard ? "p-6 lg:p-7" : "p-7 lg:p-10"} noValidate>
      {isCard && (
        <h3 className="font-display font-extrabold text-ink text-xl tracking-tight">
          Get a Fast Estimate
        </h3>
      )}

      <div className={"grid gap-4 " + (isCard ? "mt-5" : "sm:grid-cols-2")}>
        <Field label="Name" htmlFor="cli-f-name" required>
          <input
            id="cli-f-name"
            type="text"
            required
            autoComplete="name"
            className={inputClasses}
            value={values.name}
            onChange={set("name")}
          />
        </Field>
        <Field label="Phone" htmlFor="cli-f-phone" required>
          <input
            id="cli-f-phone"
            type="tel"
            required
            autoComplete="tel"
            className={inputClasses}
            value={values.phone}
            onChange={set("phone")}
          />
        </Field>
        <Field label="Email" htmlFor="cli-f-email" required>
          <input
            id="cli-f-email"
            type="email"
            required
            autoComplete="email"
            className={inputClasses}
            value={values.email}
            onChange={set("email")}
          />
        </Field>
        <Field label="Service Needed" htmlFor="cli-f-service">
          <select
            id="cli-f-service"
            className={inputClasses}
            value={values.service}
            onChange={set("service")}
          >
            {SERVICES.map(s => (
              <option key={s} value={s}>
                {s}
              </option>
            ))}
          </select>
        </Field>
      </div>

      <div className="mt-4">
        <Field label="Message" htmlFor="cli-f-message">
          <textarea
            id="cli-f-message"
            rows={isCard ? 3 : 4}
            className={inputClasses + " resize-y"}
            value={values.message}
            onChange={set("message")}
          />
        </Field>
      </div>

      {/* Honeypot — oculto para humanos */}
      <div className="hidden" aria-hidden="true">
        <label>
          Company
          <input
            type="text"
            tabIndex={-1}
            autoComplete="off"
            value={values.company}
            onChange={set("company")}
          />
        </label>
      </div>

      <label className="mt-5 flex items-start gap-2.5 text-xs text-ink/65 leading-relaxed">
        <input
          type="checkbox"
          required
          checked={values.terms}
          onChange={set("terms")}
          className="mt-0.5 accent-[--color-brand]"
        />
        <span>
          I agree to the website&rsquo;s{" "}
          <a href={cfg.privacyUrl || "/privacy-policy/"} className="underline hover:text-brand-2">
            Privacy Policy
          </a>{" "}
          and{" "}
          <a href={cfg.termsUrl || "/terms-and-conditions/"} className="underline hover:text-brand-2">
            Terms &amp; Conditions
          </a>
          .
        </span>
      </label>

      {status === "error" && (
        <p className="mt-4 text-sm text-brand-2">
          Something went wrong sending your request. Please try again, or call
          us at {cfg.phone || "(505) 518-1965"}.
        </p>
      )}

      <button
        type="submit"
        disabled={status === "sending"}
        className="cli-cta bg-brand !text-paper mt-6 w-full justify-center disabled:opacity-60 disabled:cursor-default"
      >
        <span className="cli-cta__text">
          {status === "sending" ? "Sending..." : "Submit Request"}
        </span>
        <span aria-hidden="true">→</span>
      </button>
    </form>
  )
}

export default ContactForm