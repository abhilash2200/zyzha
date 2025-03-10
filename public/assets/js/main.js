const openNavbar = document.getElementById("openNav");
const closeNavbar = document.getElementById("closeNav");
const navbar = document.getElementById("navbar");
const header = document.getElementById("header");

openNavbar.addEventListener("click",()=>{
    navbar.classList.remove("translate-x-[100%]")
    navbar.classList.add("translate-x-[0%]")
});
closeNavbar.addEventListener("click",()=>{
    navbar.classList.add("translate-x-[100%]")
    navbar.classList.remove("translate-x-[0%]")
});

window.addEventListener('scroll', function (e) {
  if (window.pageYOffset > 0) {
    header.classList.add('bg-[#FFF]', 'shadow-lg');
    header.classList.remove('bg-transparent');
      } else {
        header.classList.add('bg-transparent');
        header.classList.remove('bg-[#FFF]','shadow-lg');
      }
});
document.querySelectorAll('.dropdown-button').forEach((dropdownBtn) => {
    dropdownBtn.addEventListener('click', () => {
        const dropdownMenu = dropdownBtn.nextElementSibling;
        const icon = document.querySelector(".dropdown-icon");
        // Check if the dropdown is currently expanded
        if (dropdownMenu.style.maxHeight) {
            dropdownMenu.style.maxHeight = null; // Collapse the menu
            icon.style.rotate = '0deg'
        } else {
            dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + 'px'; // Expand the menu to the full content height
            icon.style.rotate = '180deg'
        }
    });
});



function animateCounter(element) {
    const target = parseInt(element.textContent, 10);
    const duration = 4000;
    const startTime = performance.now();

    function animate(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);
      const currentValue = Math.ceil(progress * target);

      element.textContent = currentValue;

      if (progress < 1) {
        requestAnimationFrame(animate);
      }
    }

    requestAnimationFrame(animate);
  }

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll('.count');
        counters.forEach(animateCounter);
        observer.unobserve(entry.target); // Stop observing once animation is triggered
      }
    });
  }, { threshold: 0.5 }); // Adjust threshold to control when the animation triggers

  // Select all sections (or elements) you want to observe
  const sections = document.querySelectorAll('.section');
  sections.forEach(section => observer.observe(section)); 


  function toggleAccordion(e) {
    let t = document.querySelectorAll('[id^="content-"]'),
      l = document.querySelectorAll('[id^="icon-"]'),
      n = document.querySelectorAll('[id^="header-"]'),
      o = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
      <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    </svg>
  `,
      s = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
      <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
    </svg>
  `;
    t.forEach((t, o) => {
      o + 1 !== e &&
        ((t.style.maxHeight = "0"),
        (l[o].innerHTML = s),
        n[o].classList.remove("bg-[#e5e5e5]"),
        n[o].classList.add("bg-[#F5F5F5]"));
    });
    let a = document.getElementById(`content-${e}`),
      r = document.getElementById(`icon-${e}`),
      c = document.getElementById(`header-${e}`);
    a.style.maxHeight && "0px" !== a.style.maxHeight
      ? ((a.style.maxHeight = "0"),
        (r.innerHTML = s),
        c.classList.remove("bg-[#e5e5e5]"),
        c.classList.add("bg-[#F5F5F5]"))
      : ((a.style.maxHeight = a.scrollHeight + "px"),
        (r.innerHTML = o),
        c.classList.remove("bg-[#F5F5F5]"),
        c.classList.add("bg-[#e5e5e5]"));
  }


/* emi calculator */

  document.addEventListener("DOMContentLoaded", () => {
    // DOM Elements
    const loanAmountRange = document.getElementById("loanAmountRange");
    const loanAmountInput = document.getElementById("loanAmount");
  
    const interestRange = document.getElementById("interestRange");
    const interestRate = document.getElementById("interestRate");
  
    const loanYearRange = document.getElementById("loanYearRange");
    const loanYear = document.getElementById("loanYear");
  
    const principalAmount = document.getElementById("principalAmount");
    const interestAmount = document.getElementById("interestAmount");
  
    const totalAmount = document.getElementById("totalAmount");
    const monthlyEmi = document.getElementById("monthlyEmi");
  
    // Chart Configuration
    const xValues = ["Total Interest", "Total Principal"];
    const barColors = ["#FFBF00", "#20AA4A"];
  
    const initializeChart = () => {
      return new Chart("myChart", {
        type: "doughnut",
        data: {
          labels: xValues,
          datasets: [
            {
              backgroundColor: barColors,
              data: [0, 0], // Initial empty values
            },
          ],
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: "top",
            },
          },
        },
      });
    };
  
    // Initialize the chart
    const myChart = initializeChart();
  
    // Function to calculate total interest amount
    const calculateTotalInterest = (loanAmount, interestRate, years) => {
      return (loanAmount * interestRate * years) / 100;
    };
  
    // Function to calculate monthly EMI
    const calculateMonthlyEMI = (loanAmount, interestRate, years) => {
      const monthlyRate = interestRate / 12 / 100; // Monthly interest rate
      const totalMonths = years * 12; // Convert years to months
  
      return totalMonths
        ? (loanAmount * monthlyRate * Math.pow(1 + monthlyRate, totalMonths)) /
            (Math.pow(1 + monthlyRate, totalMonths) - 1)
        : loanAmount / totalMonths; // Fallback if monthlyRate is 0
    };
  
    // Function to update UI and chart
    const updateUIAndChart = () => {
      const loanAmount = parseFloat(loanAmountRange.value) || 0;
      const interestRateValue = parseFloat(interestRange.value) || 0.5;
      const years = parseFloat(loanYearRange.value) || 1;
  
      // Calculate Total Interest
      const totalInterest = calculateTotalInterest(loanAmount, interestRateValue, years);
  
      // Update UI Elements
      loanAmountInput.value = `₹ ${loanAmount.toFixed(2)}`;
      interestRate.value = `${interestRateValue.toFixed(1)} %`;
      loanYear.value = `${years} Yrs`;
      principalAmount.innerHTML = `₹ ${loanAmount.toFixed(2)}`;
      interestAmount.innerHTML = `₹ ${totalInterest.toFixed(2)}`;
  
      // Update Chart Values
      myChart.data.datasets[0].data[0] = totalInterest; // Update "Total Interest"
      myChart.data.datasets[0].data[1] = loanAmount; // Update "Total Principal"
      myChart.update(); // Refresh the chart
  
      // Calculate Total Amount
      const total = loanAmount + totalInterest;
      totalAmount.innerHTML = `₹ ${total.toFixed(2)}`;
  
      // Calculate Monthly EMI
      /* const emi = calculateMonthlyEMI(loanAmount, interestRateValue, years); */
      const emi = total / (years * 12);
      monthlyEmi.innerHTML = `₹ ${emi.toFixed(2)}`;
    };
  
    // Initialize the UI with default values
    updateUIAndChart();
  
    // Event Listeners
    loanAmountRange.addEventListener("input", updateUIAndChart);
    interestRange.addEventListener("input", updateUIAndChart);
    loanYearRange.addEventListener("input", updateUIAndChart);
  });
  /* end */

/* modal */

// Function to open the modal
function openModal(modal) {
  if (modal) {
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
  } else {
    console.error('Modal not found');
  }
}

// Function to close the modal
function closeModal(modal) {
  if (modal) {
    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
  } else {
    console.error('Modal not found');
  }
}

// Select all buttons that open modals
const openModalButtons = document.querySelectorAll('[data-modal-target]');
// Select all modals
const modals = document.querySelectorAll('.modal');
// Select all buttons that close modals
const closeModalButtons = document.querySelectorAll('.close-modal');

// Attach event listeners to open buttons
openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modalId = button.getAttribute('data-modal-target');
    const modal = document.getElementById(modalId);
    openModal(modal);
  });
});

// Attach event listeners to close buttons
closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal');
    closeModal(modal);
  });
});

// Close modal when clicking on the backdrop (overlay)
modals.forEach(modal => {
  modal.addEventListener('click', (event) => {
    if (event.target === modal) {
      closeModal(modal);
    }
  });
});

// Automatically open the first modal after 5 seconds
setTimeout(() => {
  const firstModal = document.querySelector('.modal'); // Ensure this matches your modal's class
  if (firstModal) {
    openModal(firstModal);
  } else {
    console.error('No modal found to open automatically.');
  }
}, 10000);
  
/* end */