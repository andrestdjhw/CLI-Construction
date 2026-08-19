import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"

const navbarMount = document.querySelector("#cli-navbar")
if (navbarMount) {
  ReactDOM.createRoot(navbarMount).render(<Navbar />)
}

const footerMount = document.querySelector("#cli-footer")
if (footerMount) {
  ReactDOM.createRoot(footerMount).render(<Footer />)
}