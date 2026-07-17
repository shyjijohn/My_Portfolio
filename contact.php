<section class="contact-section" id="contact">

  <div id="error-box" class="alert-box alert-error" style="display:none;"></div>

  <div id="success-box" class="alert-box alert-success" style="display:none;">
      <p>Message sent successfully!</p>
  </div>
  <hr class="success-divider" id="success-divider" style="display:none;">

  <h2>Contact</h2>

  <div class="contact-container">

    <div class="contact-info">
      <h3>Get In Touch</h3>
      <p>Got a cool idea or looking for a new addition to your team? I'd love to hear from you!</p>
      <p>Please fill out the form or use the details below to contact me regarding projects or employment. Let's
        build something great together.</p>

      <div class="contact-details">
        <p>Email : <span>shyjijohn90@gmail.com</span></p>
      </div>
    </div>

    <form class="contact-form" novalidate>
      <div class="form-grid">
        <input type="text" name="first_name" id="first_name" placeholder="First Name*" class="full-width" required>
        <input type="text" name="last_name" id="last_name" placeholder="Last Name*" class="full-width" required>
        <input type="email" name="email" id="email" placeholder="Email Address*" class="full-width" required>
        <input type="text" name="subject" id="subject" placeholder="Subject" class="full-width">
        <textarea name="message" id="message" placeholder="Message" class="full-width"></textarea>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>

  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function () {
      var form       = document.querySelector('.contact-form');
      var successBox = document.getElementById('success-box');
      var divider    = document.getElementById('success-divider');
      var errorBox   = document.getElementById('error-box');

      form.addEventListener('submit', function (e) {
          e.preventDefault();

          $.ajax({
              url: 'contact-handler',
              method: 'POST',
              data: $(form).serialize(),
              dataType: 'json',
              success: function (res) {
                  if (res.success) {
                      errorBox.style.display = 'none';
                      successBox.style.opacity = '1';
                      successBox.style.display = '';
                      divider.style.opacity = '1';
                      divider.style.display = '';
                      form.reset();

                      setTimeout(function () {
                          successBox.style.transition = 'opacity 0.5s ease';
                          divider.style.transition    = 'opacity 0.5s ease';
                          successBox.style.opacity = '0';
                          divider.style.opacity    = '0';
                          setTimeout(function () {
                              successBox.style.display = 'none';
                              divider.style.display    = 'none';
                          }, 500);
                      }, 4000);

                  } else if (res.errors) {
                      var html = '<strong>Please fix the following:</strong><ul>';
                      res.errors.forEach(function (err) {
                          html += '<li>' + err + '</li>';
                      });
                      html += '</ul>';
                      errorBox.innerHTML = html;
                      errorBox.style.display = '';
                      successBox.style.display = 'none';
                      divider.style.display    = 'none';
                  }
              },
              error: function (xhr, status, err) {
                  errorBox.innerHTML = '<strong>Something went wrong. Please try again later.</strong>';
                  errorBox.style.display = '';
              }
          });
      });
  });
  </script>

</section>
