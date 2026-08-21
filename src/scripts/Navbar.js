import React, { useEffect, useRef, useState } from "react"
import {
  PhoneIcon,
  MailIcon,
  MapPinIcon,
  MenuIcon,
  CloseIcon,
} from "./icons"

/* Config inyectada desde functions.php (wp_localize_script) con fallbacks */
const cfg = window.cliConfig || {}

const PHONE = cfg.phone || "(505) 518-1965"
const PHONE_HREF = "tel:" + (cfg.phoneRaw || "+15055181965")
const EMAIL = cfg.email || "office@cliconstructions.com"
const GEO_LABEL = cfg.geoLabel || "Albuquerque, NM"
const MAPS_URL =
  cfg.mapsUrl ||
  "https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM"
const HOME = cfg.homeUrl || "/"
const LOGO = cfg.logoUrl || ""

/* Redes como texto mono, no fila de iconos — voz de spec-sheet */
const SOCIALS = [
  { label: "FB", full: "Facebook", href: cfg.facebook || "#" },
  { label: "IG", full: "Instagram", href: cfg.instagram || "#" },
  { label: "YELP", full: "Yelp", href: cfg.yelp || "#" },
  { label: "IN", full: "LinkedIn", href: cfg.linkedin || "#" },
]

/* Rutas reales del sitio en vivo (cliconstructions.com) */
const NAV_ITEMS = [
  { label: "Home", href: HOME },
  { label: "About Us", href: "/about-us/" },
  { label: "Services", href: "/services/" },
  { label: "Commercial", href: "/commercial/" },
  { label: "Gallery", href: "/gallery/" },
]

const CTA = { label: "Get an Estimate", href: "/contact/" }

function Navbar() {
  const headerRef = useRef(null)
  const topbarRef = useRef(null)
  const [condensed, setCondensed] = useState(false)
  const [stuck, setStuck] = useState(false)
  const [open, setOpen] = useState(false)

  /* Altura real del topbar → variable CSS para el translateY exacto */
  useEffect(() => {
    const setVar = () => {
      if (!headerRef.current || !topbarRef.current) return
      headerRef.current.style.setProperty(
        "--cli-topbar-h",
        topbarRef.current.offsetHeight + "px"
      )
    }
    setVar()
    window.addEventListener("resize", setVar)
    return () => window.removeEventListener("resize", setVar)
  }, [])

  /* Scroll: down → esconder topbar, up → mostrarlo. rAF-throttled. */
  useEffect(() => {
    let lastY = window.scrollY
    let ticking = false

    const onScroll = () => {
      if (ticking) return
      ticking = true
      requestAnimationFrame(() => {
        const y = window.scrollY
        const delta = y - lastY
        setStuck(y > 4)
        if (Math.abs(delta) > 6) {
          if (delta > 0 && y > 120) setCondensed(true)
          else if (delta < 0) setCondensed(false)
          lastY = y
        }
        ticking = false
      })
    }

    window.addEventListener("scroll", onScroll, { passive: true })
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  useEffect(() => {
    document.body.style.overflow = open ? "hidden" : ""
    if (open) setCondensed(false)
    return () => {
      document.body.style.overflow = ""
    }
  }, [open])

  return (
    <header
      ref={headerRef}
      className={
        "cli-header" +
        (condensed && !open ? " is-condensed" : "") +
        (stuck ? " is-stuck" : "")
      }
    >
      {/* ============ TOPBAR — franja de especificación ============ */}
      <div ref={topbarRef} className="bg-ink text-silver">
        <div className="cli-topbar-sep max-w-7xl mx-auto px-4 flex items-center justify-between gap-5 py-2.5">
          {/* Izquierda: teléfono + correo */}
          <div className="flex items-center gap-5 min-w-0">
            <a
              href={PHONE_HREF}
              className="cli-spec flex items-center gap-2 hover:text-silver-2 transition-colors"
            >
              <PhoneIcon className="w-3.5 h-3.5 text-brand" />
              <span className="whitespace-nowrap">{PHONE}</span>
            </a>
            <a
              href={"mailto:" + EMAIL}
              className="cli-spec hidden sm:flex items-center gap-2 hover:text-silver-2 transition-colors min-w-0"
            >
              <MailIcon className="w-3.5 h-3.5 text-brand" />
              <span className="truncate normal-case tracking-normal font-body text-xs">
                {EMAIL}
              </span>
            </a>
          </div>

          {/* Centro: geotag → Google Maps (externo) */}
          <a
            href={MAPS_URL}
            target="_blank"
            rel="noopener noreferrer"
            className="cli-spec hidden md:flex items-center gap-2 hover:text-silver-2 transition-colors"
          >
            <MapPinIcon className="w-3.5 h-3.5 text-brand" />
            <span>{GEO_LABEL}</span>
          </a>

          {/* Derecha: redes como índice mono */}
          <div className="flex items-center gap-4">
            {SOCIALS.map(s => (
              <a
                key={s.label}
                href={s.href}
                target="_blank"
                rel="noopener noreferrer"
                aria-label={s.full}
                className="cli-spec hover:text-silver-2 transition-colors"
              >
                {s.label}
              </a>
            ))}
          </div>
        </div>
      </div>

      {/* ============ BARRA PRINCIPAL — blanca + regla de latón ============ */}
      <div className="cli-bar cli-on-light cli-gradient-flip text-ink">
        <div className="max-w-7xl mx-auto px-4 flex items-center justify-between gap-6 h-20">
          {/* Logo */}
          <a href={HOME} className="flex items-center shrink-0">
            {LOGO ? (
              <img src={LOGO} alt="CLI Construction" className="h-12 w-auto" />
            ) : (
              <span className="font-display font-extrabold text-2xl tracking-tight text-ink leading-none">
                CLI
                <span className="block text-[0.55rem] font-mono font-medium tracking-[0.3em] text-silver mt-1">
                  CONSTRUCTION
                </span>
              </span>
            )}
          </a>

          {/* Nav desktop */}
          <nav className="hidden lg:flex items-center gap-8">
            {NAV_ITEMS.map(item => (
              <a key={item.label} href={item.href} className="cli-link whitespace-nowrap">
                {item.label}
              </a>
            ))}
          </nav>

          {/* CTA + hamburguesa */}
          <div className="flex items-center gap-3 shrink-0">
            <a href={CTA.href} className="cli-cta hidden sm:inline-flex">
              {CTA.label}
              <span aria-hidden="true">→</span>
            </a>
            <button
              type="button"
              className="lg:hidden text-ink p-1"
              aria-label={open ? "Close menu" : "Open menu"}
              aria-expanded={open}
              onClick={() => setOpen(v => !v)}
            >
              {open ? <CloseIcon /> : <MenuIcon />}
            </button>
          </div>
        </div>

        {/* Panel móvil */}
        {open && (
          <nav className="lg:hidden border-t border-silver/30 cli-gradient">
            <div className="max-w-7xl mx-auto px-4 py-5 flex flex-col gap-4">
              {NAV_ITEMS.map(item => (
                <a
                  key={item.label}
                  href={item.href}
                  className="cli-link py-1.5 w-fit"
                  onClick={() => setOpen(false)}
                >
                  {item.label}
                </a>
              ))}
              <a
                href={CTA.href}
                className="cli-cta mt-2 justify-center"
                onClick={() => setOpen(false)}
              >
                {CTA.label}
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </nav>
        )}
      </div>
    </header>
  )
}

export default Navbar