function handleIntersection(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        if (entry.target.id === 'section1') {
          entry.target.classList.add('animated-left');
        } else if (entry.target.id === 'section2') {
          entry.target.classList.add('animated-right');
        }
        observer.unobserve(entry.target);
      }
    });
  }

  const options = {
    threshold: 0.5
  };

  const observer = new IntersectionObserver(handleIntersection, options);

  const sections = document.querySelectorAll('.section');
  sections.forEach(section => {
    observer.observe(section);
  });