/* Reveal-on-scroll — agrega .is-visible al entrar en viewport.
   Los .cli-reveal-stagger reciben delay escalonado. */
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