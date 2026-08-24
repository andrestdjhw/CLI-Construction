/* Reveal-on-scroll — agrega .is-visible al entrar en viewport.
   Los .cli-reveal-stagger reciben delay escalonado. */
export function initCarousels() {
  document.querySelectorAll("[data-cli-carousel]").forEach(carousel => {
    const track = carousel.querySelector("[data-track]")
    if (!track) return
    const step = () => Math.max(track.clientWidth * 0.85, 320)
    carousel.querySelectorAll("[data-prev]").forEach(btn =>
      btn.addEventListener("click", () => track.scrollBy({ left: -step() }))
    )
    carousel.querySelectorAll("[data-next]").forEach(btn =>
      btn.addEventListener("click", () => track.scrollBy({ left: step() }))
    )
  })
}

export default function initReveals() {
  const items = document.querySelectorAll(
    ".cli-reveal-up, .cli-reveal-left, .cli-reveal-right, .cli-reveal-stagger"
  )
  if (!items.length) return

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach((entry, idx) => {
        if (!entry.isIntersecting) return
        const delay = entry.target.classList.contains("cli-reveal-stagger")
          ? (idx % 6) * 60
          : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
        observer.unobserve(entry.target)
      })
    },
    { threshold: 0.12 }
  )

  items.forEach(item => observer.observe(item))
}