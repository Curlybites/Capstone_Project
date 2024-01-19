// $(document).ready(function(){
//     // Initialize Modal 1
//     $('#exampleModal').modal();

//     // Initialize Modal 2
//     $('#exampleModal1').modal();
// });

$(document).on('hidden.bs.modal', function() {
	if ($('.modal.show').length) {
		$('body').addClass('modal-open');
	}
});

var table = $('#dataTable').DataTable(
    {
        "processing": true,
        "scrollY": 410,
        "scrollX": true,
        order: [ 0, 'asc' ],
        //max :5, WRONG OPTION!
        "pageLength": 5,
        "ajax" : {
            "url" : A_PAGE_CONTEXT_PATH + "/form/api/getAllSelection/all",
            dataSrc : ''
        },
        "columns" : [ {
            "data" : "selectionId"
        }, {
            "data" : "selectionDate"
        }, {
            "data" : "selectedBy"
        }, {
            "data" : "eximPanNo"
        }, {
            "data" : "eximPanName"
        }, {
            "data" : "eximPanAddr"
        }, {
            "data" : "eximPanPhone"
        }, {
            "data" : "selectionType"
        } ]
    });
// const progressSteps = document.querySelectorAll(".progress-step");
// let formStepsNum = 0;



// const multiStepForm = document.querySelector("[data-multi-step]")

// const formSteps = [...multiStepForm.querySelectorAll("[data-step]")]

// let currentStep = formSteps.findIndex(step => {
//   return step.classList.contains("active")
// })

// if (currentStep < 0) {
//   currentStep = 0
//   showCurrentStep()
// }

// multiStepForm.addEventListener("click", e => {
//   let incrementor
//   if (e.target.matches("[data-next]")) {
//     incrementor = 1
//     updateProgressbar()
//   } else if (e.target.matches("[data-previous]")) {
//     incrementor = -1
//     updateProgressbar()
//   }

//   if (incrementor == null) return
  
//   const inputs = [...formSteps[currentStep].querySelectorAll("input")]
//   const allValid = inputs.every(input => input.reportValidity())
//   if (allValid) {
//     currentStep += incrementor
//     showCurrentStep()
//     updateProgressbar()
//   }
// })




// formSteps.forEach(step => {
//   step.addEventListener("animationend", e => {
//     formSteps[currentStep].classList.remove("hide")
//     e.target.classList.toggle("hide", !e.target.classList.contains("active"))
//   })
// })

// function showCurrentStep() {
//   formSteps.forEach((step, index) => {
//     step.classList.toggle("active", index === currentStep)
//   })
// }
 

// function updateProgressbar() {
//   progressSteps.forEach((progressStep, idx) => {
//     if (idx < formStepsNum + 1) {
//       progressStep.classList.add("form-step-active");
//     } else {
//       progressStep.classList.remove("form-step-active");
//     }
//   })
// }