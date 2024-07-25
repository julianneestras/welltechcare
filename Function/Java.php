<script type="text/javascript">

   function getAge(){
    var Birthdate = document.getElementById('date').value;
    Birthdate = new Date(Birthdate);
    var today = new Date();
    var Age = Math.floor((today-Birthdate) / (365.25 * 24 * 60 * 60 * 1000));
    document.getElementById('Age').value=Age;
}


</script>


