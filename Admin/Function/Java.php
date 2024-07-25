<script type="text/javascript">

   function getAge(){
    var doctor_birthdate = document.getElementById('date').value;
    doctor_birthdate = new Date(doctor_birthdate);
    var today = new Date();
    var doctor_age = Math.floor((today-doctor_birthdate) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('doctor_age').value=doctor_age;
}


</script>