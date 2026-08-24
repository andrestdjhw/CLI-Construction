/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/Animations.js"
/*!***********************************!*\
  !*** ./src/scripts/Animations.js ***!
  \***********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ initReveals),
/* harmony export */   initCarousels: () => (/* binding */ initCarousels)
/* harmony export */ });
/* Reveal-on-scroll — agrega .is-visible al entrar en viewport.
   Los .cli-reveal-stagger reciben delay escalonado. */
function initCarousels() {
  document.querySelectorAll("[data-cli-carousel]").forEach(carousel => {
    const track = carousel.querySelector("[data-track]");
    if (!track) return;
    const step = () => Math.max(track.clientWidth * 0.85, 320);
    carousel.querySelectorAll("[data-prev]").forEach(btn => btn.addEventListener("click", () => track.scrollBy({
      left: -step()
    })));
    carousel.querySelectorAll("[data-next]").forEach(btn => btn.addEventListener("click", () => track.scrollBy({
      left: step()
    })));
  });
}
function initReveals() {
  const items = document.querySelectorAll(".cli-reveal-up, .cli-reveal-left, .cli-reveal-right, .cli-reveal-stagger");
  if (!items.length) return;
  const observer = new IntersectionObserver(entries => {
    entries.forEach((entry, idx) => {
      if (!entry.isIntersecting) return;
      const delay = entry.target.classList.contains("cli-reveal-stagger") ? idx % 6 * 60 : 0;
      setTimeout(() => entry.target.classList.add("is-visible"), delay);
      observer.unobserve(entry.target);
    });
  }, {
    threshold: 0.12
  });
  items.forEach(item => observer.observe(item));
}

/***/ },

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const cfg = window.cliConfig || {};
const SERVICES = ["General Inquiry", "Renovations", "Remodels", "Painting", "Stucco", "Roofing", "Commercial / Multi-Housing"];
const inputClasses = "w-full bg-paper border border-ink/20 px-3.5 py-2.5 text-sm text-ink " + "placeholder:text-ink/35 focus:outline-none focus:border-brand " + "focus:ring-1 focus:ring-brand transition-colors";
function Field({
  label,
  htmlFor,
  required,
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
    className: "block",
    htmlFor: htmlFor,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
      className: "cli-spec text-silver",
      children: [label, required && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-brand",
        children: " *"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "mt-1.5",
      children: children
    })]
  });
}

/* variant: "full" (página de contacto) | "card" (panel del hero) */
function ContactForm({
  variant = "full"
}) {
  const isCard = variant === "card";
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("idle"); // idle | sending | success | error
  const [values, setValues] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({
    name: "",
    phone: "",
    email: "",
    service: SERVICES[0],
    message: "",
    terms: false,
    company: "" // honeypot
  });
  const set = key => e => setValues(v => ({
    ...v,
    [key]: e.target.type === "checkbox" ? e.target.checked : e.target.value
  }));
  const submit = async e => {
    e.preventDefault();
    if (status === "sending") return;
    setStatus("sending");
    try {
      const data = new FormData();
      data.append("action", "cli_contact");
      data.append("nonce", cfg.contactNonce || "");
      Object.entries(values).forEach(([k, v]) => data.append(k, v));
      const res = await fetch(cfg.ajaxUrl || "/wp-admin/admin-ajax.php", {
        method: "POST",
        body: data
      });
      const json = await res.json();
      if (!res.ok || !json.success) throw new Error("send failed");
      setStatus("success");
      setValues(v => ({
        ...v,
        name: "",
        phone: "",
        email: "",
        message: "",
        terms: false
      }));
    } catch (err) {
      setStatus("error");
    }
  };
  if (status === "success") {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: isCard ? "p-6 lg:p-7" : "p-7 lg:p-10",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
        className: "cli-spec text-brand-2",
        children: "Request received"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
        className: "mt-2 font-display font-extrabold text-ink text-2xl tracking-tight",
        children: "Thank you!"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
        className: "mt-3 text-ink/70 leading-relaxed",
        children: ["We got your request and will get back to you with next steps. Need it faster? Call us at", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: "tel:" + (cfg.phoneRaw || "+15055181965"),
          className: "text-brand-2 font-semibold",
          children: cfg.phone || "(505) 518-1965"
        }), "."]
      })]
    });
  }
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("form", {
    onSubmit: submit,
    className: isCard ? "p-6 lg:p-7" : "p-7 lg:p-10",
    noValidate: true,
    children: [isCard && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
      className: "font-display font-extrabold text-ink text-xl tracking-tight",
      children: "Get a Fast Estimate"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "grid gap-4 " + (isCard ? "mt-5" : "sm:grid-cols-2"),
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: "Name",
        htmlFor: "cli-f-name",
        required: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cli-f-name",
          type: "text",
          required: true,
          autoComplete: "name",
          className: inputClasses,
          value: values.name,
          onChange: set("name")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: "Phone",
        htmlFor: "cli-f-phone",
        required: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cli-f-phone",
          type: "tel",
          required: true,
          autoComplete: "tel",
          className: inputClasses,
          value: values.phone,
          onChange: set("phone")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: "Email",
        htmlFor: "cli-f-email",
        required: true,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cli-f-email",
          type: "email",
          required: true,
          autoComplete: "email",
          className: inputClasses,
          value: values.email,
          onChange: set("email")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: "Service Needed",
        htmlFor: "cli-f-service",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("select", {
          id: "cli-f-service",
          className: inputClasses,
          value: values.service,
          onChange: set("service"),
          children: SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: s,
            children: s
          }, s))
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "mt-4",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        label: "Message",
        htmlFor: "cli-f-message",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
          id: "cli-f-message",
          rows: isCard ? 3 : 4,
          className: inputClasses + " resize-y",
          value: values.message,
          onChange: set("message")
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "hidden",
      "aria-hidden": "true",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
        children: ["Company", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          type: "text",
          tabIndex: -1,
          autoComplete: "off",
          value: values.company,
          onChange: set("company")
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
      className: "mt-5 flex items-start gap-2.5 text-xs text-ink/65 leading-relaxed",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
        type: "checkbox",
        required: true,
        checked: values.terms,
        onChange: set("terms"),
        className: "mt-0.5 accent-[--color-brand]"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        children: ["I agree to the website\u2019s", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: cfg.privacyUrl || "/privacy-policy/",
          className: "underline hover:text-brand-2",
          children: "Privacy Policy"
        }), " ", "and", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
          href: cfg.termsUrl || "/terms-and-conditions/",
          className: "underline hover:text-brand-2",
          children: "Terms & Conditions"
        }), "."]
      })]
    }), status === "error" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "mt-4 text-sm text-brand-2",
      children: ["Something went wrong sending your request. Please try again, or call us at ", cfg.phone || "(505) 518-1965", "."]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
      type: "submit",
      disabled: status === "sending",
      className: "cli-cta bg-brand !text-paper mt-6 w-full justify-center disabled:opacity-60 disabled:cursor-default",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "cli-cta__text",
        children: status === "sending" ? "Sending..." : "Submit Request"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        "aria-hidden": "true",
        children: "\u2192"
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./icons */ "./src/scripts/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



const cfg = window.cliConfig || {};
const PHONE = cfg.phone || "(505) 518-1965";
const PHONE_HREF = "tel:" + (cfg.phoneRaw || "+15055181965");
const EMAIL = cfg.email || "office@cliconstructions.com";
const GEO_LABEL = cfg.geoLabel || "Albuquerque, NM";
const MAPS_URL = cfg.mapsUrl || "https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM";
const HOME = cfg.homeUrl || "/";
const LOGO = cfg.logoUrl || "";

/* Rutas reales del sitio en vivo */
const LINKS = [{
  label: "Services",
  href: "/services/"
}, {
  label: "Commercial",
  href: "/commercial/"
}, {
  label: "Gallery",
  href: "/gallery/"
}, {
  label: "About Us",
  href: "/about-us/"
}, {
  label: "Contact",
  href: "/contact-us/"
}, {
  label: "Get an Estimate",
  href: "/contact/"
}];
const AREAS = "Albuquerque · Rio Rancho · Los Lunas · Santa Fe · Santa Rosa";
const SOCIALS = [{
  label: "Facebook",
  href: cfg.facebook || "#"
}, {
  label: "Instagram",
  href: cfg.instagram || "#"
}, {
  label: "Yelp",
  href: cfg.yelp || "#"
}, {
  label: "LinkedIn",
  href: cfg.linkedin || "#"
}];

/* Ft5 · Statement — el slogan recomendado del reporte cierra la página;
   debajo, una banda de datos estilo spec-sheet. Sin columnas de sitemap,
   sin fila de iconos. */
function Footer() {
  const year = new Date().getFullYear();
  const [dockVisible, setDockVisible] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);

  /* El dock aparece al hacer scroll down (pasado el hero) */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    let ticking = false;
    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        setDockVisible(window.scrollY > 300);
        ticking = false;
      });
    };
    onScroll();
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("footer", {
    className: "bg-ink text-silver",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "cli-float-dock" + (dockVisible ? " is-visible" : ""),
      children: [[{
        key: "facebook",
        label: "Facebook",
        href: cfg.facebook,
        Icon: _icons__WEBPACK_IMPORTED_MODULE_1__.FacebookIcon
      }, {
        key: "instagram",
        label: "Instagram",
        href: cfg.instagram,
        Icon: _icons__WEBPACK_IMPORTED_MODULE_1__.InstagramIcon
      }, {
        key: "yelp",
        label: "Yelp",
        href: cfg.yelp,
        Icon: _icons__WEBPACK_IMPORTED_MODULE_1__.YelpIcon
      }, {
        key: "linkedin",
        label: "LinkedIn",
        href: cfg.linkedin,
        Icon: _icons__WEBPACK_IMPORTED_MODULE_1__.LinkedInIcon
      }].filter(s => s.href && s.href !== "#").map(({
        key,
        label,
        href,
        Icon
      }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
        href: href,
        target: "_blank",
        rel: "noopener noreferrer",
        "aria-label": label,
        className: "cli-float-social cli-float-social--" + key,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Icon, {
          className: "w-5 h-5"
        })
      }, key)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
        href: PHONE_HREF,
        className: "cli-float-call",
        "aria-label": "Call " + PHONE,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("svg", {
          viewBox: "0 0 24 24",
          className: "w-5 h-5 shrink-0",
          fill: "none",
          stroke: "currentColor",
          strokeWidth: "2",
          strokeLinecap: "round",
          strokeLinejoin: "round",
          "aria-hidden": "true",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("path", {
            d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
          className: "cli-float-call__text cli-spec",
          children: ["Call ", PHONE]
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "max-w-7xl mx-auto px-4 pt-20 pb-14",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("p", {
        className: "font-display font-extrabold text-paper leading-[1.02] tracking-tight text-[clamp(2rem,5.5vw,3.75rem)] max-w-[18ch]",
        children: ["Efficiency. Precision.", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
          className: "text-brand",
          children: "Commercial Results."
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("nav", {
        "aria-label": "Footer",
        className: "mt-10 flex flex-wrap gap-x-8 gap-y-3",
        children: LINKS.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
          href: item.href,
          className: "cli-link",
          children: item.label
        }, item.label))
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "border-t border-silver/25",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 py-8 grid gap-6 md:grid-cols-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
            className: "cli-spec text-silver-2",
            children: "Contact"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("p", {
            className: "mt-2.5 text-sm leading-relaxed",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
              href: PHONE_HREF,
              className: "hover:text-silver-2 transition-colors",
              children: PHONE
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("br", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
              href: "mailto:" + EMAIL,
              className: "hover:text-silver-2 transition-colors",
              children: EMAIL
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("br", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
              href: MAPS_URL,
              target: "_blank",
              rel: "noopener noreferrer",
              className: "hover:text-silver-2 transition-colors",
              children: GEO_LABEL
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
            className: "cli-spec text-silver-2",
            children: "Hours"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("p", {
            className: "mt-2.5 text-sm leading-relaxed",
            children: ["Mon \u2013 Fri \xB7 9:00 AM \u2013 5:00 PM", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("br", {}), "Saturday \xB7 10:00 AM \u2013 2:00 PM", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("br", {}), "Sunday \xB7 Closed"]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
            className: "cli-spec text-silver-2",
            children: "Service Area"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
            className: "mt-2.5 text-sm leading-relaxed",
            children: AREAS
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
            className: "cli-spec mt-4 text-silver/80",
            children: "BBB Certified \xB7 AANM Member \xB7 Licensed & Insured"
          })]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "cli-on-light cli-pattern text-ink border-t border-silver/25",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 py-5 flex flex-col md:flex-row items-start md:items-center justify-between gap-3",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
          href: HOME,
          className: "flex items-center shrink-0",
          children: LOGO ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("img", {
            src: LOGO,
            alt: "CLI Construction",
            className: "h-10 w-auto"
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
            className: "font-display font-extrabold text-ink leading-none",
            children: ["CLI", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "cli-spec text-brand-2 font-medium",
              children: "Construction"
            })]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
          className: "flex flex-wrap gap-x-5 gap-y-2",
          children: SOCIALS.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
            href: s.href,
            target: "_blank",
            rel: "noopener noreferrer",
            className: "cli-spec text-ink/60 hover:text-brand-2 transition-colors",
            children: s.label
          }, s.label))
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("p", {
          className: "cli-spec text-ink/55",
          children: ["\xA9 ", year, " CLI Construction \xB7", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
            href: cfg.agencyUrl || "https://828marketingsolutions.com",
            target: "_blank",
            rel: "noopener noreferrer",
            className: "hover:text-brand-2 transition-colors",
            children: "Site by 828 Marketing Solutions"
          })]
        })]
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./icons */ "./src/scripts/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



/* Config inyectada desde functions.php (wp_localize_script) con fallbacks */

const cfg = window.cliConfig || {};
const PHONE = cfg.phone || "(505) 518-1965";
const PHONE_HREF = "tel:" + (cfg.phoneRaw || "+15055181965");
const EMAIL = cfg.email || "office@cliconstructions.com";
const GEO_LABEL = cfg.geoLabel || "Albuquerque, NM";
const MAPS_URL = cfg.mapsUrl || "https://www.google.com/maps/search/?api=1&query=CLI+Construction+Albuquerque+NM";
const HOME = cfg.homeUrl || "/";
const LOGO = cfg.logoUrl || "";

/* Redes como texto mono, no fila de iconos — voz de spec-sheet */
const SOCIALS = [{
  label: "FB",
  full: "Facebook",
  href: cfg.facebook || "#"
}, {
  label: "IG",
  full: "Instagram",
  href: cfg.instagram || "#"
}, {
  label: "YELP",
  full: "Yelp",
  href: cfg.yelp || "#"
}, {
  label: "IN",
  full: "LinkedIn",
  href: cfg.linkedin || "#"
}];

/* Rutas reales del sitio en vivo (cliconstructions.com) */
const NAV_ITEMS = [{
  label: "Home",
  href: HOME
}, {
  label: "About Us",
  href: "/about-us/"
}, {
  label: "Services",
  href: "/services/",
  mega: true
}, {
  label: "Commercial",
  href: "/commercial/"
}, {
  label: "Gallery",
  href: "/gallery/"
}];

/* Mega menu de Services — fotos locales de cada servicio */
const MEGA_SERVICES = [{
  label: "Renovations",
  href: "/service/renovations/",
  desc: "Quality craftsmanship with timely completion.",
  img: "/wp-content/uploads/2026/08/CLIRenovations.webp"
}, {
  label: "Remodels",
  href: "/service/remodels/",
  desc: "Comprehensive commercial & multi-housing remodeling.",
  img: "/wp-content/uploads/2026/08/CLIRemodels.jpg"
}, {
  label: "Painting",
  href: "/service/painting/",
  desc: "Interior & exterior with durable finishes.",
  img: "/wp-content/uploads/2026/08/PaintingCLI-scaled.webp"
}, {
  label: "Stucco",
  href: "/service/stucco/",
  desc: "Application & repair — a NM specialty done right.",
  img: "/wp-content/uploads/2026/08/CLIStucco.webp"
}, {
  label: "Roofing",
  href: "/service/roofing/",
  desc: "Installation, repairs & maintenance.",
  img: "/wp-content/uploads/2026/08/RoofingCLI.jpg"
}];
const CTA = {
  label: "Get an Estimate",
  href: "/contact/"
};
function Navbar() {
  const headerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const topbarRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const [condensed, setCondensed] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [stuck, setStuck] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [open, setOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [megaOpen, setMegaOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);

  /* Cerrar el mega menu con Escape */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!megaOpen) return;
    const onKey = e => {
      if (e.key === "Escape") setMegaOpen(false);
    };
    window.addEventListener("keydown", onKey);
    return () => window.removeEventListener("keydown", onKey);
  }, [megaOpen]);

  /* Altura real del topbar → variable CSS para el translateY exacto */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const setVar = () => {
      if (!headerRef.current || !topbarRef.current) return;
      headerRef.current.style.setProperty("--cli-topbar-h", topbarRef.current.offsetHeight + "px");
    };
    setVar();
    window.addEventListener("resize", setVar);
    return () => window.removeEventListener("resize", setVar);
  }, []);

  /* Scroll: down → esconder topbar, up → mostrarlo. rAF-throttled. */
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    let lastY = window.scrollY;
    let ticking = false;
    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(() => {
        const y = window.scrollY;
        const delta = y - lastY;
        setStuck(y > 4);
        if (Math.abs(delta) > 6) {
          if (delta > 0 && y > 120) setCondensed(true);else if (delta < 0) setCondensed(false);
          lastY = y;
        }
        ticking = false;
      });
    };
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    document.body.style.overflow = open ? "hidden" : "";
    if (open) setCondensed(false);
    return () => {
      document.body.style.overflow = "";
    };
  }, [open]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("header", {
    ref: headerRef,
    className: "cli-header" + (condensed && !open ? " is-condensed" : "") + (stuck ? " is-stuck" : ""),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      ref: topbarRef,
      className: "bg-ink text-silver",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "cli-topbar-sep max-w-7xl mx-auto px-4 flex items-center justify-between gap-5 py-2.5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "flex items-center gap-5 min-w-0",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: PHONE_HREF,
            className: "cli-spec flex items-center gap-2 hover:text-silver-2 transition-colors",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.PhoneIcon, {
              className: "w-3.5 h-3.5 text-brand"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "whitespace-nowrap",
              children: PHONE
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: "mailto:" + EMAIL,
            className: "cli-spec hidden sm:flex items-center gap-2 hover:text-silver-2 transition-colors min-w-0",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.MailIcon, {
              className: "w-3.5 h-3.5 text-brand"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "truncate normal-case tracking-normal font-body text-xs",
              children: EMAIL
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
          href: MAPS_URL,
          target: "_blank",
          rel: "noopener noreferrer",
          className: "cli-spec hidden md:flex items-center gap-2 hover:text-silver-2 transition-colors",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.MapPinIcon, {
            className: "w-3.5 h-3.5 text-brand"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
            children: GEO_LABEL
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
          className: "flex items-center gap-4",
          children: SOCIALS.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
            href: s.href,
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": s.full,
            className: "cli-spec hover:text-silver-2 transition-colors",
            children: s.label
          }, s.label))
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "cli-bar cli-on-light bg-paper text-ink relative",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4 flex items-center justify-between gap-6 h-20",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
          href: HOME,
          className: "flex items-center shrink-0",
          children: LOGO ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("img", {
            src: LOGO,
            alt: "CLI Construction",
            className: "h-12 w-auto"
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
            className: "font-display font-extrabold text-2xl tracking-tight text-ink leading-none",
            children: ["CLI", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "block text-[0.55rem] font-mono font-medium tracking-[0.3em] text-silver mt-1",
              children: "CONSTRUCTION"
            })]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("nav", {
          className: "hidden lg:flex items-center gap-8",
          children: NAV_ITEMS.map(item => item.mega ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: "h-20 flex items-center",
            onMouseEnter: () => setMegaOpen(true),
            onMouseLeave: () => setMegaOpen(false),
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
              href: item.href,
              className: "cli-link whitespace-nowrap" + (megaOpen ? " is-active" : ""),
              "aria-haspopup": "true",
              "aria-expanded": megaOpen,
              onFocus: () => setMegaOpen(true),
              children: [item.label, " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                "aria-hidden": "true",
                className: "inline-block text-[0.6em] align-middle transition-transform " + (megaOpen ? "rotate-180" : ""),
                children: "\u25BC"
              })]
            })
          }, item.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
            href: item.href,
            className: "cli-link whitespace-nowrap",
            children: item.label
          }, item.label))
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "flex items-center gap-3 shrink-0",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: CTA.href,
            className: "cli-cta hidden sm:inline-flex",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "cli-cta__text",
              children: CTA.label
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              "aria-hidden": "true",
              children: "\u2192"
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("button", {
            type: "button",
            className: "lg:hidden text-ink p-1",
            "aria-label": open ? "Close menu" : "Open menu",
            "aria-expanded": open,
            onClick: () => setOpen(v => !v),
            children: open ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.CloseIcon, {}) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.MenuIcon, {})
          })]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
        className: "cli-mega hidden lg:block" + (megaOpen ? " is-open" : ""),
        onMouseEnter: () => setMegaOpen(true),
        onMouseLeave: () => setMegaOpen(false),
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-4 py-8",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
            className: "grid grid-cols-5 gap-5",
            children: MEGA_SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
              href: s.href,
              className: "group",
              tabIndex: megaOpen ? 0 : -1,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
                className: "cli-card-media",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("img", {
                  src: s.img,
                  alt: "",
                  className: "w-full aspect-[16/10] object-cover",
                  loading: "lazy"
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("h3", {
                className: "mt-3 font-display font-bold text-ink tracking-tight group-hover:text-brand-2 transition-colors",
                children: s.label
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
                className: "mt-1 text-xs text-ink/60 leading-relaxed",
                children: s.desc
              })]
            }, s.label))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
            className: "mt-7 pt-5 border-t border-ink/15 flex flex-wrap items-center justify-between gap-4",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
              href: "/services/",
              className: "cli-link text-ink",
              tabIndex: megaOpen ? 0 : -1,
              children: "Explore All Services"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
              href: CTA.href,
              className: "cli-cta",
              tabIndex: megaOpen ? 0 : -1,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "cli-cta__text",
                children: CTA.label
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                "aria-hidden": "true",
                children: "\u2192"
              })]
            })]
          })]
        })
      }), open && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("nav", {
        className: "lg:hidden border-t border-silver/30 bg-paper",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-4 py-5 flex flex-col gap-4",
          children: [NAV_ITEMS.map(item => item.mega ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("details", {
            className: "group",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("summary", {
              className: "cli-link py-1.5 w-fit list-none cursor-pointer [&::-webkit-details-marker]:hidden",
              children: [item.label, " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                "aria-hidden": "true",
                className: "inline-block text-[0.6em] align-middle transition-transform group-open:rotate-180",
                children: "\u25BC"
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
              className: "mt-2 ml-4 flex flex-col gap-2.5 border-l border-silver/40 pl-4",
              children: [MEGA_SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
                href: s.href,
                className: "text-sm font-medium text-ink/80 hover:text-brand-2 transition-colors",
                onClick: () => setOpen(false),
                children: s.label
              }, s.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
                href: item.href,
                className: "cli-spec text-brand-2",
                onClick: () => setOpen(false),
                children: "All Services \u2192"
              })]
            })]
          }, item.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
            href: item.href,
            className: "cli-link py-1.5 w-fit",
            onClick: () => setOpen(false),
            children: item.label
          }, item.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: CTA.href,
            className: "cli-cta mt-2 justify-center",
            onClick: () => setOpen(false),
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              className: "cli-cta__text",
              children: CTA.label
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
              "aria-hidden": "true",
              children: "\u2192"
            })]
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./src/scripts/icons.js"
/*!******************************!*\
  !*** ./src/scripts/icons.js ***!
  \******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   CloseIcon: () => (/* binding */ CloseIcon),
/* harmony export */   FacebookIcon: () => (/* binding */ FacebookIcon),
/* harmony export */   InstagramIcon: () => (/* binding */ InstagramIcon),
/* harmony export */   LinkedInIcon: () => (/* binding */ LinkedInIcon),
/* harmony export */   MailIcon: () => (/* binding */ MailIcon),
/* harmony export */   MapPinIcon: () => (/* binding */ MapPinIcon),
/* harmony export */   MenuIcon: () => (/* binding */ MenuIcon),
/* harmony export */   PhoneIcon: () => (/* binding */ PhoneIcon),
/* harmony export */   YelpIcon: () => (/* binding */ YelpIcon)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


/* Iconos SVG inline (stroke = currentColor) — sin dependencias externas */

const base = {
  fill: "none",
  stroke: "currentColor",
  strokeWidth: 2,
  strokeLinecap: "round",
  strokeLinejoin: "round",
  "aria-hidden": true
};
const PhoneIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const MailIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "4",
    width: "20",
    height: "16",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-10 6L2 7"
  })]
});
const MapPinIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
});
const MenuIcon = ({
  className = "w-6 h-6"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M4 6h16M4 12h16M4 18h16"
  })
});
const CloseIcon = ({
  className = "w-6 h-6"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 6 6 18M6 6l12 12"
  })
});

/* Redes — rellenos sólidos */

const solid = {
  fill: "currentColor",
  "aria-hidden": true
};
const FacebookIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...solid,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.45 2.89h-2.33v6.99A10 10 0 0 0 22 12z"
  })
});
const InstagramIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...base,
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "2",
    width: "20",
    height: "20",
    rx: "5"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "12",
    r: "4"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "17.5",
    cy: "6.5",
    r: "0.5",
    fill: "currentColor",
    stroke: "none"
  })]
});
const YelpIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...solid,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12.9 2.6c.3-.8-.3-1.6-1.1-1.5l-4 .6c-.7.1-1.1.8-.9 1.5l2.6 8.3c.3.9 1.6.9 1.9 0l1.5-8.9zM10.8 14.6c-.1-.7-1-1-1.5-.5l-3.5 3.1c-.6.5-.4 1.4.3 1.7l3.3 1.3c.7.3 1.4-.3 1.4-1v-4.6zM12.7 14.9c-.5-.4-1.3-.1-1.4.6l-.5 4.6c-.1.7.6 1.3 1.3 1l3.4-1.4c.7-.3.8-1.2.2-1.7l-3-3.1zM13.6 12.9c.2.6 1 .8 1.5.4l3.7-2.9c.6-.5.4-1.4-.3-1.7l-3.3-1.2c-.7-.2-1.4.3-1.3 1l-.3 4.4z"
  })
});
const LinkedInIcon = ({
  className = "w-4 h-4"
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  viewBox: "0 0 24 24",
  className: className,
  ...solid,
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45z"
  })
});

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			const getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var _scripts_Animations__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/Animations */ "./src/scripts/Animations.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);







const navbarMount = document.querySelector("#cli-navbar");
if (navbarMount) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(navbarMount).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}
const footerMount = document.querySelector("#cli-footer");
if (footerMount) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(footerMount).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}
document.querySelectorAll("[data-cli-contact-form]").forEach(mount => {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(mount).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    variant: mount.dataset.variant || "full"
  }));
});
(0,_scripts_Animations__WEBPACK_IMPORTED_MODULE_5__["default"])();
(0,_scripts_Animations__WEBPACK_IMPORTED_MODULE_5__.initCarousels)();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map