document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    var submitButton = document.querySelector("input[type='submit']");
    
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      
      var nume = document.querySelector("input[name='numele']").value;
      var prenume = document.querySelector("input[name='prenumele']").value;
      var email = document.querySelector("input[type='email']").value;
      var mesaj = document.querySelector("textarea").value;
      
      localStorage.setItem("nume", nume);
      localStorage.setItem("prenume", prenume);
      localStorage.setItem("email", email);
      localStorage.setItem("mesaj", mesaj);
      
      var successMessage = document.createElement("p");
      successMessage.textContent = "Datele au fost salvate cu succes!";
      successMessage.style.color = "green";
      
      var formContainer = document.querySelector(".form-container");
      formContainer.appendChild(successMessage);
    });
  });

$(document).ready(function(){

    $('.fa-bars').click(function(){
      $(this).toggleClass('fa-times');
      $('nav').toggleClass('nav-toggle');
    });
  
    $(window).on('scroll load',function(){
      $('.fa-bars').removeClass('fa-times');
      $('nav').removeClass('nav-toggle');
    });
  
    $('.count').each(function() {
      var $this = $(this),
          countTo = $this.attr('data-count');
      $({ countNum: $this.text()}).animate({
        countNum: countTo
      },
      {
        duration: 5000,
        step: function() {
          $this.text(Math.floor(this.countNum));
        },
        complete: function() {
          $this.text(this.countNum + '+');
        }
      });
    });
  });

  