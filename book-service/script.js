let currentStep = 0;
const steps = document.querySelectorAll('.step');

function showStep(stepIndex) {
    steps.forEach((step, index) => {
        step.classList.toggle('active', index === stepIndex);
    });
}

function nextStep() {
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
}

function confirmBooking() {
    // Collect and validate booking details
    // Show summary step
    currentStep++;
    showStep(currentStep);
}

function bookNow() {
    // Handle final booking confirmation
    alert('Booking confirmed!');
}

showStep(currentStep);
