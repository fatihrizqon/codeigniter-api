
<!-- Angular Material requires Angular.js Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>

<!-- Your application bootstrap  -->
<script>
  angular.module('myBookApp', ['ngMaterial', 'ngMessages']).controller('AppCtrl', function() {
    this.myDate = new Date();
    this.minDate = new Date(
      this.myDate.getFullYear(),
      this.myDate.getMonth() - 2,
      this.myDate.getDate()
    );

    this.maxDate = new Date(
      this.myDate.getFullYear(),
      this.myDate.getMonth() + 2,
      this.myDate.getDate()
    );
  });
</script>
<script>

</script>
</body>
</html>
<script>

</script>
