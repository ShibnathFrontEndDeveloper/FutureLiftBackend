let uploadbtn = document.getElementById('upload_inout');
let uploadImage = document.getElementById('upload_image');
let flag = false;
let uploadFile = "";
console.log(BASE_URL);
uploadbtn.onchange = () =>{
    let reader = new FileReader();
    reader.readAsDataURL(uploadbtn.files[0]);
    console.log(uploadbtn.files[0]);
    uploadFile = uploadbtn.files[0];
    reader.onload = () =>{
        uploadImage.setAttribute("src",reader.result);
    }
};

function step_one(){
    $("#ftco-loader").show();
    var gender = $('input[name="gender"]:checked').val();
    var dob = $("#dob").val();
    var mother_name = $("#mother_name").val();
    var father_name = $("#father_name").val();
    var name = $("#name").val();
    var city = $("#city").val();
    var infoId = $("#infoId").val();

    var formData = new FormData();
    formData.append('file', uploadFile);
    formData.append('infoId', infoId);
    formData.append('gender', gender);
    formData.append('dob', dob);
    formData.append('mother_name', mother_name);
    formData.append('father_name', father_name);
    formData.append('name', name);
    formData.append('city', city);

    axios.post(BASE_URL+'/user/step-one-submit', formData)
      .then(function (response) {
        if(!response.data.status){
            console.log(response.data);
            flag = false;
            $("#ftco-loader").hide();
            toastr.error(response.data.message, 'error');
        }else{
            flag = true;
        }
      })
      .catch(function (error) {
        console.log(error);
        flag = false;
        $("#ftco-loader").hide();
        toastr.error('Something went wrong', 'error');
      });



}

function step_two(){
    $("#ftco-loader").show();
    var college = $("#college").val();
    var university = $("#university").val();
    var course = $("#course").val();
    var year_of_passing = $("#year_of_passing").val();
    var infoId = $("#infoId").val();

    var formData = new FormData();
    formData.append('college', college);
    formData.append('infoId', infoId);
    formData.append('university', university);
    formData.append('course', course);
    formData.append('year_of_passing', year_of_passing);

    axios.post(BASE_URL+'/user/step-two-submit', formData)
      .then(function (response) {
        if(!response.data.status){
            console.log(response.data);
            flag = false;
            $("#ftco-loader").hide();
            toastr.error(response.data.message, 'error');
        }else{
            flag = true;
        }
      })
      .catch(function (error) {
        console.log(error);
        flag = false;
        $("#ftco-loader").hide();
        toastr.error('Something went wrong', 'error');
      });



}


function step_three(){
    $("#ftco-loader").show();
    var infoId = $("#infoId").val();
    var father_guardian_name = $("#father_guardian_name").val();
    var mother_guardian_name = $("#mother_guardian_name").val();
    var father_profession = $("#father_profession").val();
    var mother_profession = $("#mother_profession").val();

    var formData = new FormData();
    formData.append('father_guardian_name', father_guardian_name);
    formData.append('infoId', infoId);
    formData.append('mother_guardian_name', mother_guardian_name);
    formData.append('father_profession', father_profession);
    formData.append('mother_profession', mother_profession);


    axios.post(BASE_URL+'/user/step-three-submit', formData)
      .then(function (response) {
        if(!response.data.status){
            console.log(response.data);
            flag = false;
            $("#ftco-loader").hide();
            toastr.error(response.data.message, 'error');
        }else{
            flag = true;
        }
      })
      .catch(function (error) {
        console.log(error);
        flag = false;
        $("#ftco-loader").hide();
        toastr.error('Something went wrong', 'error');
      });


}



$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;





$(".next").click(function(){

    setTimeout(() => {

    if(flag){
        $("#ftco-loader").hide();
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    console.log(current_fs);
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).toggleClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
        },
        duration: 600
    });
    }
}, 2000);
});


$(".prev").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).toggleClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        },
        duration: 600
    });
});
});




let show_input =document.querySelector('.show_input')
  let hide_input =document.querySelector('.hide_input')
  let collapse_input =document.querySelector('#collapse_input')

  show_input.onclick = () =>{
    collapse_input.style.display='block';
  }

  hide_input.onclick=()=>{
    collapse_input.style.display='none';
  }