<head>
<link rel="stylesheet" href="{{asset('css/raad_form.css')}}">

</head>
<body style="background: white;">
@include('navbar')
@include('header')

<div class="formbold-main-wrapper" >
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="https://formbold.com/s/FORM_ID" method="POST" style="padding: 32px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0,0,0,.3);">
        <div class="formbold-steps">
            <ul>
                <li class="formbold-step-menu1 active">
                    <span>1</span>
                    Sender
                </li>
                <li class="formbold-step-menu2">
                    <span>2</span>
                    Recipient
                </li>
                <li class="formbold-step-menu3">
                    <span>3</span>
                    Parcel
                </li>
                <li class="formbold-step-menu4">
                    <span>4</span>
                    Review
                </li>
            </ul>
        </div>

        <div class="formbold-form-step-1 active">
          <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"> Sender name </label>
                <input
                type="text"
                name="firstname"
                placeholder="Andrio"
                id="firstname"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="lastname" class="formbold-form-label"> Sender Mobile Number </label>
                <input
                type="text"
                name="lastname"
                placeholder="Dolee"
                id="lastname"
                class="formbold-form-input"
                />
            </div>
          </div>
  
          <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label"> Email</label>
                  <input 
                  type="date" 
                  name="dob" 
                  id="dob" 
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="email" class="formbold-form-label"> District </label>
                  <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  id="email"
                  class="formbold-form-input"
                  />
              </div>
          </div>
  
          <div>
              <label for="address" class="formbold-form-label"> Sender Address </label>
              <input
              type="text"
              name="address"
              id="address"
              placeholder="Flat 4, 24 Castle Street, Perth, PH1 3JY"
              class="formbold-form-input"
              />
          </div>
        </div>
        


        <div class="formbold-form-step-2">
        <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"> Recipient name </label>
                <input
                type="text"
                name="firstname"
                placeholder="Andrio"
                id="firstname"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="lastname" class="formbold-form-label"> Recipient Mobile Number </label>
                <input
                type="text"
                name="lastname"
                placeholder="Dolee"
                id="lastname"
                class="formbold-form-input"
                />
            </div>
          </div>

          <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label"> District</label>
                  <input 
                  type="date" 
                  name="dob" 
                  id="dob" 
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="email" class="formbold-form-label"> Nearest Area </label>
                  <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  id="email"
                  class="formbold-form-input"
                  />
              </div>
          </div>

          <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label"> Recipient Address</label>
                  <input 
                  type="date" 
                  name="dob" 
                  id="dob" 
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="email" class="formbold-form-label"> District </label>
                  <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  id="email"
                  class="formbold-form-input"
                  />
              </div>
          </div>

          <div>
            <label for="message" class="formbold-form-label"> Instruction </label>
            <textarea
              rows="6"
              name="message"
              id="message"
              placeholder="Type your message"
              class="formbold-form-input"
            ></textarea>
          </div>
        </div>

        <div class="formbold-form-step-3">
          <div class="formbold-form-confirm">
          <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"> Parcel</label>
                <input
                type="text"
                name="firstname"
                placeholder="Andrio"
                id="firstname"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="lastname" class="formbold-form-label"> Recipient Mobile Number </label>
                <input
                type="text"
                name="lastname"
                placeholder="Dolee"
                id="lastname"
                class="formbold-form-input"
                />
            </div>
          </div>

            
          </div>
        </div>


        <div class="formbold-form-step-4">
          <div class="formbold-input-flex">
            <div>
                <label for="firstname" class="formbold-form-label"> Sender name </label>
                <input
                type="text"
                name="firstname"
                placeholder="Andrio"
                id="firstname"
                class="formbold-form-input"
                />
            </div>
            <div>
                <label for="lastname" class="formbold-form-label"> Sender Mobile Number </label>
                <input
                type="text"
                name="lastname"
                placeholder="Dolee"
                id="lastname"
                class="formbold-form-input"
                />
            </div>
          </div>
  
          <div class="formbold-input-flex">
              <div>
                  <label for="dob" class="formbold-form-label"> Email</label>
                  <input 
                  type="date" 
                  name="dob" 
                  id="dob" 
                  class="formbold-form-input"
                  />
              </div>
              <div>
                  <label for="email" class="formbold-form-label"> District </label>
                  <input
                  type="email"
                  name="email"
                  placeholder="example@mail.com"
                  id="email"
                  class="formbold-form-input"
                  />
              </div>
          </div>
  
          <div>
              <label for="address" class="formbold-form-label"> Sender Address </label>
              <input
              type="text"
              name="address"
              id="address"
              placeholder="Flat 4, 24 Castle Street, Perth, PH1 3JY"
              class="formbold-form-input"
              />
          </div>
        </div>
        

        

       

        <div class="formbold-form-btn-wrapper">
          <button class="formbold-back-btn">
            Back
          </button>

          <button class="formbold-btn">
              Next Step
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1675_1807)">
              <path d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_1675_1807">
              <rect width="16" height="16" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </button>
        </div>
    </form>
  </div>
</div>
</body>

<script src="{{asset('js/vendor-all.min.js')}}" ></script>
    <script src="{{asset('js/plugins/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/pcoded.min.js')}}" ></script>


<script>
  const stepMenuOne = document.querySelector('.formbold-step-menu1')
  const stepMenuTwo = document.querySelector('.formbold-step-menu2')
  const stepMenuThree = document.querySelector('.formbold-step-menu3')
  const stepMenuFour = document.querySelector('.formbold-step-menu4')


  const stepOne = document.querySelector('.formbold-form-step-1')
  const stepTwo = document.querySelector('.formbold-form-step-2')
  const stepThree = document.querySelector('.formbold-form-step-3')
  const stepFour = document.querySelector('.formbold-form-step-4')

  stepFour.style.display = 'none'

  const formSubmitBtn = document.querySelector('.formbold-btn')
  const formBackBtn = document.querySelector('.formbold-back-btn')

  formSubmitBtn.addEventListener("click", function(event){
    event.preventDefault()
    if(stepMenuOne.className == 'formbold-step-menu1 active') {
        event.preventDefault()

        stepMenuOne.classList.remove('active')
        stepMenuTwo.classList.add('active')

        stepOne.classList.remove('active')
        stepTwo.classList.add('active')

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')

          formBackBtn.classList.remove('active')

        })

      } else if(stepMenuTwo.className == 'formbold-step-menu2 active') {
        event.preventDefault()

        stepMenuTwo.classList.remove('active')
        stepMenuThree.classList.add('active')

        stepTwo.classList.remove('active')
        stepThree.classList.add('active')

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuTwo.classList.add('active')
          stepMenuThree.classList.remove('active')
          stepMenuOne.classList.remove('active')

          stepTwo.classList.add('active')
          stepOne.classList.remove('active')
          stepThree.classList.remove('active')

          formBackBtn.classList.add('active')
          
          formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')

          formBackBtn.classList.remove('active')

        })

        })

        // formBackBtn.classList.remove('active')
        // formSubmitBtn.textContent = 'Submit'
      } else if(stepMenuThree.className == 'formbold-step-menu3 active') {
        event.preventDefault()

        stepMenuThree.classList.remove('active')
        stepMenuFour.classList.add('active')

        stepThree.classList.remove('active')
        stepFour.classList.add('active')

        stepFour.style.display = 'block'

        formBackBtn.classList.add('active')
        formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuThree.classList.add('active')
          stepMenuFour.classList.remove('active')
          stepMenuTwo.classList.remove('active')
          stepMenuOne.classList.remove('active')

          stepThree.classList.add('active')
          stepOne.classList.remove('active')
          stepTwo.classList.remove('active')
          stepFour.classList.remove('active')
          stepFour.style.display = 'none'
          formSubmitBtn.textContent = 'Next Step'

          formBackBtn.classList.add('active')
          
          formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuTwo.classList.add('active')
          stepMenuOne.classList.remove('active')
          stepMenuThree.classList.remove('active')
          stepMenuFour.classList.remove('active')

          stepTwo.classList.add('active')
          stepOne.classList.remove('active')
          stepThree.classList.remove('active')
          stepFour.classList.remove('active')

          formBackBtn.classList.add('active')

          formBackBtn.addEventListener("click", function (event) {
          event.preventDefault()

          stepMenuOne.classList.add('active')
          stepMenuTwo.classList.remove('active')
          stepMenuThree.classList.remove('active')
          stepMenuFour.classList.remove('active')

          stepOne.classList.add('active')
          stepTwo.classList.remove('active')
          stepThree.classList.remove('active')
          stepFour.classList.remove('active')
          
          formBackBtn.classList.remove('active')

        })
            })
        })


        formSubmitBtn.textContent = 'Submit'

      } else if(stepMenuThree.className == 'formbold-step-menu3 active') {
        document.querySelector('form').submit()
      }
  })
    

  
</script>