import React, { useEffect, useRef, useState } from "react"
import {
  PhoneIcon,
  MailIcon,
  MapPinIcon,
  MenuIcon,
  CloseIcon,
  FacebookIcon,
  InstagramIcon,
  YelpIcon,
  LinkedInIcon,
} from "./icons"

/* Config inyectada desde functions.php (wp_localize_script) con fallbacks */
const cfg = window.cliConfig || {}

const PHONE = cfg.phone || "(505) 518-1965"
const PHONE_HREF = "tel:" + (cfg.phoneRaw || "+15055181965")
const EMAIL = cfg.email || "office@cliconstructions.com"
const GEO_LABEL = cfg.geoLabel || "3136 Coors Blvd NW Ste B, Albuquerque, NM"
const MAPS_URL =
  cfg.mapsUrl ||
  "https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM"
const HOME = cfg.homeUrl || "/"
const LOGO = cfg.logoUrl || ""

/* Redes como texto mono, no fila de iconos — voz de spec-sheet */
const SOCIALS = [
  { full: "Facebook", href: cfg.facebook || "#", Icon: FacebookIcon },
  { full: "Instagram", href: cfg.instagram || "#", Icon: InstagramIcon },
  { full: "Yelp", href: cfg.yelp || "#", Icon: YelpIcon },
  { full: "LinkedIn", href: cfg.linkedin || "#", Icon: LinkedInIcon },
]

/* Rutas reales del sitio en vivo (cliconstructions.com) */
const NAV_ITEMS = [
  { label: "Home", href: HOME },
  { label: "About Us", href: "/about-us/" },
  { label: "Services", href: "/services/", mega: true },
  { label: "Commercial", href: "/commercial/" },
  { label: "Gallery", href: "/gallery/" },
  { label: "Locations", href: "/locations/" },
]

/* Mega menu de Services — fotos locales de cada servicio */
const MEGA_SERVICES = [
  {
    label: "Renovations",
    href: "/service/renovations/",
    desc: "Quality craftsmanship with timely completion.",
    img: "/wp-content/uploads/2026/08/CLIRenovations.webp",
  },
  {
    label: "Remodels",
    href: "/service/remodels/",
    desc: "Comprehensive commercial & multi-housing remodeling.",
    img: "/wp-content/uploads/2026/08/CLIRemodels.jpg",
  },
  {
    label: "Painting",
    href: "/service/painting/",
    desc: "Interior & exterior with durable finishes.",
    img: "/wp-content/uploads/2026/08/PaintingCLI-scaled.webp",
  },
  {
    label: "Stucco",
    href: "/service/stucco/",
    desc: "Application & repair — a NM specialty done right.",
    img: "/wp-content/uploads/2026/08/CLIStucco.webp",
  },
  {
    label: "Roofing",
    href: "/service/roofing/",
    desc: "Installation, repairs & maintenance.",
    img: "/wp-content/uploads/2026/08/RoofingCLI.jpg",
  },
]

const CTA = { label: "Get an Estimate", href: "/contact/" }

/* Áreas de servicio — mismas ciudades que el footer (AREAS) */
const SERVICE_AREAS = ["Albuquerque", "Rio Rancho", "Los Lunas", "Santa Fe", "Santa Rosa"]

function Navbar() {
  const headerRef = useRef(null)
  const topbarRef = useRef(null)
  const [condensed, setCondensed] = useState(false)
  const [stuck, setStuck] = useState(false)
  const [open, setOpen] = useState(false)
  const [megaOpen, setMegaOpen] = useState(false)

  /* Cerrar el mega menu con Escape */
  useEffect(() => {
    if (!megaOpen) return
    const onKey = e => {
      if (e.key === "Escape") setMegaOpen(false)
    }
    window.addEventListener("keydown", onKey)
    return () => window.removeEventListener("keydown", onKey)
  }, [megaOpen])

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
      <div ref={topbarRef} className="bg-ink text-paper">
        <div className="cli-topbar-sep max-w-7xl mx-auto px-4 flex items-center justify-between gap-5 py-3.5">
          {/* Izquierda: teléfono + correo */}
          <div className="flex items-center gap-5 min-w-0">
            <a
              href={PHONE_HREF}
              className="cli-spec flex items-center gap-2 hover:text-brand transition-colors"
            >
              <PhoneIcon className="w-3.5 h-3.5 text-brand" />
              <span className="whitespace-nowrap">{PHONE}</span>
            </a>
            <a
              href={"mailto:" + EMAIL}
              className="cli-spec hidden sm:flex items-center gap-2 hover:text-brand transition-colors min-w-0"
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
            className="cli-spec hidden md:flex items-center gap-2 hover:text-brand transition-colors min-w-0"
          >
            <MapPinIcon className="w-3.5 h-3.5 shrink-0" />
            <span className="normal-case tracking-normal font-body text-xs truncate">{GEO_LABEL}</span>
          </a>

          {/* Derecha: redes como iconos */}
          <div className="flex items-center gap-4">
            {SOCIALS.map(({ full, href, Icon }) => (
              <a
                key={full}
                href={href}
                target="_blank"
                rel="noopener noreferrer"
                aria-label={full}
                className="hover:text-brand transition-colors"
              >
                <Icon className="w-3.5 h-3.5" />
              </a>
            ))}
          </div>
        </div>
      </div>

      {/* ============ BARRA PRINCIPAL ============ */}
      <div className="cli-bar cli-on-light bg-paper text-ink relative">
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
            {NAV_ITEMS.map(item =>
              item.mega ? (
                <div
                  key={item.label}
                  className="h-20 flex items-center"
                  onMouseEnter={() => setMegaOpen(true)}
                  onMouseLeave={() => setMegaOpen(false)}
                >
                  <a
                    href={item.href}
                    className={"cli-link whitespace-nowrap" + (megaOpen ? " is-active" : "")}
                    aria-haspopup="true"
                    aria-expanded={megaOpen}
                    onFocus={() => setMegaOpen(true)}
                  >
                    {item.label}{" "}
                    <span
                      aria-hidden="true"
                      className={
                        "inline-block text-[0.6em] align-middle transition-transform " +
                        (megaOpen ? "rotate-180" : "")
                      }
                    >
                      &#9660;
                    </span>
                  </a>
                </div>
              ) : (
                <a key={item.label} href={item.href} className="cli-link whitespace-nowrap">
                  {item.label}
                </a>
              )
            )}
          </nav>

          {/* CTA + hamburguesa */}
          <div className="flex items-center gap-3 shrink-0">
            <a href={CTA.href} className="cli-cta hidden sm:inline-flex">
              <span className="cli-cta__text">{CTA.label}</span>
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

        {/* Mega menu — Services (desktop) */}
        <div
          className={"cli-mega hidden lg:block" + (megaOpen ? " is-open" : "")}
          onMouseEnter={() => setMegaOpen(true)}
          onMouseLeave={() => setMegaOpen(false)}
        >
          <div className="max-w-7xl mx-auto px-4 py-8">
            <div className="grid grid-cols-5 gap-5 cli-mega__grid">
              {MEGA_SERVICES.map(s => (
                <a
                  key={s.label}
                  href={s.href}
                  className="cli-mega-card group"
                  tabIndex={megaOpen ? 0 : -1}
                >
                  <div className="cli-card-media">
                    <img
                      src={s.img}
                      alt=""
                      className="w-full aspect-[16/10] object-cover"
                      loading="lazy"
                    />
                  </div>
                  <div className="px-3.5 pt-3.5 pb-4">
                    <h3 className="font-display font-bold text-ink tracking-tight group-hover:text-brand-2 transition-colors">
                      {s.label}
                    </h3>
                    <p className="mt-1 text-xs text-ink/60 leading-relaxed">{s.desc}</p>
                  </div>
                </a>
              ))}
            </div>
            <div className="mt-7 pt-5 border-t border-ink/15 flex items-center gap-6">
              <a
                href="/services/"
                className="cli-link text-ink shrink-0"
                tabIndex={megaOpen ? 0 : -1}
              >
                Explore All Services
              </a>
              {/* Marquee continuo de áreas de servicio */}
              <div
                className="cli-marquee flex-1 min-w-0 border-l border-ink/15 pl-6"
                aria-label="Service areas"
              >
                <div className="cli-marquee__track flex items-center gap-6 w-max pr-6">
                  {[0, 1].map(copy =>
                    SERVICE_AREAS.map(city => (
                      <React.Fragment key={copy + "-" + city}>
                        <span
                          className="cli-spec text-silver whitespace-nowrap"
                          {...(copy ? { "aria-hidden": "true" } : {})}
                        >
                          {city}
                        </span>
                        <span className="text-brand" aria-hidden="true">
                          &#9670;
                        </span>
                      </React.Fragment>
                    ))
                  )}
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Panel móvil */}
        {open && (
          <nav className="lg:hidden border-t border-silver/30 bg-paper">
            <div className="max-w-7xl mx-auto px-4 py-5 flex flex-col gap-4">
              {NAV_ITEMS.map(item =>
                item.mega ? (
                  <details key={item.label} className="group">
                    <summary className="cli-link py-1.5 w-fit list-none cursor-pointer [&::-webkit-details-marker]:hidden">
                      {item.label}{" "}
                      <span aria-hidden="true" className="inline-block text-[0.6em] align-middle transition-transform group-open:rotate-180">
                        &#9660;
                      </span>
                    </summary>
                    <div className="mt-2 ml-4 flex flex-col gap-2.5 border-l border-silver/40 pl-4">
                      {MEGA_SERVICES.map(s => (
                        <a
                          key={s.label}
                          href={s.href}
                          className="text-sm font-medium text-ink/80 hover:text-brand-2 transition-colors"
                          onClick={() => setOpen(false)}
                        >
                          {s.label}
                        </a>
                      ))}
                      <a
                        href={item.href}
                        className="cli-spec text-brand-2"
                        onClick={() => setOpen(false)}
                      >
                        All Services →
                      </a>
                    </div>
                  </details>
                ) : (
                  <a
                    key={item.label}
                    href={item.href}
                    className="cli-link py-1.5 w-fit"
                    onClick={() => setOpen(false)}
                  >
                    {item.label}
                  </a>
                )
              )}
              <a
                href={CTA.href}
                className="cli-cta mt-2 justify-center"
                onClick={() => setOpen(false)}
              >
                <span className="cli-cta__text">{CTA.label}</span>
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