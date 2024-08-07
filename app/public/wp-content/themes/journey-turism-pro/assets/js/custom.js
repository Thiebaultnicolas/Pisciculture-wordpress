const lenis = new Lenis({
  duration: 2.5,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  direction: "vertical", // vertical, horizontal
  gestureDirection: "vertical", // vertical, horizontal, both
  smooth: true,
  mouseMultiplier: 1,
  smoothTouch: false,
  touchMultiplier: 2,
  infinite: false,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

gsap.registerPlugin(ScrollTrigger);

// UPDATE MOUSE CURSOR STYLE AND MOVEMENT
if (window.matchMedia("(min-width: 680px)").matches) {
  const cursorOuter = document.querySelector(".cursor--large"),
        cursorInner = document.querySelector(".cursor--small");

  if (cursorOuter && cursorInner) {
    function updateCursor(e) {
      setTimeout(function () {
        gsap.set([cursorInner], {
          x: e.clientX,
          y: e.clientY,
        });
      }, 50);

      setTimeout(function () {
        gsap.set([cursorOuter], {
          x: e.clientX,
          y: e.clientY,
        });
      }, 90);
    }

    window.addEventListener("mousemove", (e) => updateCursor(e));
  }
}

if (window.matchMedia("(min-width: 768px)").matches) {
  const sections = gsap.utils.toArray(".box-home-services");

  if (sections.length > 0) {
    gsap.to(sections, {
      xPercent: -100 * (sections.length - 3),
      ease: "none",
      scrollTrigger: {
        trigger: ".container-imgs-home-services",
        pin: true,
        scrub: 0.1,
        end: "+=3000"
      }
    });
  }

  const fadeUps = gsap.utils.toArray('.fade-up');
  const fadeLefts = gsap.utils.toArray('.fade-left');
  const fadeRights = gsap.utils.toArray('.fade-right');

  if (fadeUps.length > 0 || fadeLefts.length > 0 || fadeRights.length > 0) {
    gsap.set(fadeUps, { opacity: 0, y: 50 });
    gsap.set(fadeLefts, { opacity: 0, x: '-100vw' });
    gsap.set(fadeRights, { opacity: 0, x: '100vw' });

    fadeUps.forEach(fadeUp => {
      gsap.to(fadeUp, {
        duration: 1.5,
        opacity: 1,
        y: 0,
        ease: "power2.out",
        scrollTrigger: {
          trigger: fadeUp,
          start: "top 80%",
          end: "top 50%",
          toggleActions: "play none none none"
        }
      });
    });

    fadeLefts.forEach(fadeLeft => {
      gsap.to(fadeLeft, {
        duration: 2.5,
        opacity: 1,
        x: 0,
        ease: "power2.out",
        scrollTrigger: {
          trigger: fadeLeft,
          start: "top 80%",
          end: "top 50%",
          toggleActions: "play none none none"
        }
      });
    });

    fadeRights.forEach(fadeRight => {
      gsap.to(fadeRight, {
        duration: 2.5,
        opacity: 1,
        x: 0,
        ease: "power2.out",
        scrollTrigger: {
          trigger: fadeRight,
          start: "top 80%",
          end: "top 50%",
          toggleActions: "play none none none"
        }
      });
    });
  }
}
