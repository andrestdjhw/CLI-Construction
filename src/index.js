import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"
import initReveals, { initCarousels } from "./scripts/Animations"

const navbarMount = document.querySelector("#cli-navbar")
if (navbarMount) {
  ReactDOM.createRoot(navbarMount).render(<Navbar />)
}

const footerMount = document.querySelector("#cli-footer")
if (footerMount) {
  ReactDOM.createRoot(footerMount).render(<Footer />)
}

document.querySelectorAll("[data-cli-contact-form]").forEach(mount => {
  ReactDOM.createRoot(mount).render(
    <ContactForm variant={mount.dataset.variant || "full"} />
  )
})

initReveals()
initCarousels()