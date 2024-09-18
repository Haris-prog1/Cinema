console.clear();

gsap.registerPlugin(ScrollTrigger);

window.addEventListener("load", () => {
  const wrapper2 = document.getElementById("wrapper2");
  if (wrapper2){
    gsap
    .timeline({
      scrollTrigger: {
        trigger: ".wrapper2",
        start: "top top",
        end: "+=150%",
        pin: true,
        scrub: true,
        markers: true
      }
    })
    .to("img", {
      scale: 2,
      z: 350,
      transformOrigin: "center center",
      ease: "power1.inOut"
    })
    .to(
      ".section.hero",
      {
        scale: 1.1,
        transformOrigin: "center center",
        ease: "power1.inOut"
      },
      "<"
    );
  }
 
});
