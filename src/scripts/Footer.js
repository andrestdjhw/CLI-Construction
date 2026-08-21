import React from "react"

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

/* Rutas reales del sitio en vivo */
const LINKS = [
  { label: "Services", href: "/services/" },
  { label: "Commercial", href: "/commercial/" },
  { label: "Gallery", href: "/gallery/" },
  { label: "About Us", href: "/about-us/" },
  { label: "Contact", href: "/contact-us/" },
  { label: "Get an Estimate", href: "/contact/" },
]

const AREAS = "Albuquerque · Rio Rancho · Los Lunas · Santa Fe · Santa Rosa"

const SOCIALS = [
  { label: "Facebook", href: cfg.facebook || "#" },
  { label: "Instagram", href: cfg.instagram || "#" },
  { label: "Yelp", href: cfg.yelp || "#" },
  { label: "LinkedIn", href: cfg.linkedin || "#" },
]

/* Ft5 · Statement — el slogan recomendado del reporte cierra la página;
   debajo, una banda de datos estilo spec-sheet. Sin columnas de sitemap,
   sin fila de iconos. */
function Footer() {
  const year = new Date().getFullYear()

  return (
    <footer className="bg-ink text-silver">
      {/* ============ STATEMENT ============ */}
      <div className="max-w-7xl mx-auto px-4 pt-20 pb-14">
        <p className="font-display font-extrabold text-paper leading-[1.02] tracking-tight text-[clamp(2rem,5.5vw,3.75rem)] max-w-[18ch]">
          Efficiency. Precision.{" "}
          <span className="text-brand">Commercial Results.</span>
        </p>

        {/* Nav esencial en una sola línea */}
        <nav
          aria-label="Footer"
          className="mt-10 flex flex-wrap gap-x-8 gap-y-3"
        >
          {LINKS.map(item => (
            <a key={item.label} href={item.href} className="cli-link">
              {item.label}
            </a>
          ))}
        </nav>
      </div>

      {/* ============ BANDA DE DATOS — spec-sheet ============ */}
      <div className="border-t border-silver/25">
        <div className="max-w-7xl mx-auto px-4 py-8 grid gap-6 md:grid-cols-3">
          <div>
            <p className="cli-spec text-silver-2">Contact</p>
            <p className="mt-2.5 text-sm leading-relaxed">
              <a href={PHONE_HREF} className="hover:text-silver-2 transition-colors">
                {PHONE}
              </a>
              <br />
              <a
                href={"mailto:" + EMAIL}
                className="hover:text-silver-2 transition-colors"
              >
                {EMAIL}
              </a>
              <br />
              <a
                href={MAPS_URL}
                target="_blank"
                rel="noopener noreferrer"
                className="hover:text-silver-2 transition-colors"
              >
                {GEO_LABEL}
              </a>
            </p>
          </div>

          <div>
            <p className="cli-spec text-silver-2">Hours</p>
            <p className="mt-2.5 text-sm leading-relaxed">
              Mon – Fri · 9:00 AM – 5:00 PM
              <br />
              Saturday · 10:00 AM – 2:00 PM
              <br />
              Sunday · Closed
            </p>
          </div>

          <div>
            <p className="cli-spec text-silver-2">Service Area</p>
            <p className="mt-2.5 text-sm leading-relaxed">{AREAS}</p>
            <p className="cli-spec mt-4 text-silver/80">
              BBB Certified · AANM Member · Licensed &amp; Insured
            </p>
          </div>
        </div>
      </div>

      {/* ============ CIERRE — cinta blanca con logo ============ */}
      <div className="cli-on-light cli-pattern text-ink border-t border-silver/25">
        <div className="max-w-7xl mx-auto px-4 py-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-3">
          <a href={HOME} className="flex items-center shrink-0">
            {LOGO ? (
              <img
                src={LOGO}
                alt="CLI Construction"
                className="h-10 w-auto"
              />
            ) : (
              <span className="font-display font-extrabold text-ink leading-none">
                CLI{" "}
                <span className="cli-spec text-brand-2 font-medium">
                  Construction
                </span>
              </span>
            )}
          </a>

          {/* Redes como índice mono, no iconos */}
          <div className="flex flex-wrap gap-x-5 gap-y-2">
            {SOCIALS.map(s => (
              <a
                key={s.label}
                href={s.href}
                target="_blank"
                rel="noopener noreferrer"
                className="cli-spec text-ink/60 hover:text-brand-2 transition-colors"
              >
                {s.label}
              </a>
            ))}
          </div>

          <p className="cli-spec text-ink/55">
            © {year} CLI Construction ·{" "}
            <a
              href={cfg.agencyUrl || "https://828marketingsolutions.com"}
              target="_blank"
              rel="noopener noreferrer"
              className="hover:text-brand-2 transition-colors"
            >
              Site by 828 Marketing Solutions
            </a>
          </p>
        </div>
      </div>
    </footer>
  )
}

export default Footer