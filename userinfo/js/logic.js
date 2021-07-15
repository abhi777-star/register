$(function(){
    $("#fileupload").change(function(event) {
        var x = URL.createObjectURL(event.target.files[0]);
        $("#upload-img").attr("src",x);
        console.log(event);
    });
})


function send(){
    let FirstName=document.getElementById("fname").value;
    let LastName=document.getElementById("lname").value;
    let email=document.getElementById("email").value;
    let city=document.getElementById("city").value;
    let country=document.getElementById("country").value;
     
    if(FirstName && LastName && email && city && country)
    {
        alert("Thank You My Team Will Shortly Contact You");
    }
    else
    {
        alert("Please Fill up the Form And Then Click On Sumbit");
    }
}
