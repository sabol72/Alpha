<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BBC FAQ</title>
    <link rel="stylesheet" href="assets/css/FAQ.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container section-title">
      <h2>FAQs</h2>
      <p>When it comes to repair & maintenance for your home or office, you need an expert. Let's get started</p>

      <div class="faq">
        <button class="accordion">
          What service do you offer?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            We offer a wide range of home services, including plumbing, electrical work, handyman services, masonry, tiling, and AC technician services.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How do i book your services?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            You can book our services online by filling out our booking form on our website or by giving us a call. Our customer service team will be happy to assist you with any questions you may have.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How much do your services cost?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            The cost of our services varies depending on the type of service you require and the complexity of the job. However, we offer competitive pricing and always strive to make our services affordable for our clients.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          Are your technicians licensed and insured?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            Yes, all of our technicians are licensed and insured. We only hire skilled professionals with years of experience in their respective fields, ensuring that our clients receive top-notch service
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          What forms of payment do you accept?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            We accept cash and all major credit cards, including Visa, Mastercard, and American Express.
          </p>
        </div>
      </div>

      <div class="faq">
        <button class="accordion">
          How long does a typical service call take?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
            The length of a service call depends on the type of service you require and the complexity of the job. However, we always strive to complete our work in a timely and efficient manner.
          </p>
        </div>
      </div>
    </div>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");

          var pannel = this.nextElementSibling;

          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>
