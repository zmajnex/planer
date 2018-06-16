<?php 
include 'inc/header.php';
include 'dbh.php';

        
        try{
          //TODO Pagination for every month 
          $sql = 'SELECT * FROM zakazivanje ';
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          $users=$stmt->fetchAll();
          $time=array();

  foreach($users as $user){    
   array_push($time,$user->date);
 }
 //convert the PHP array into JSON format, so it works with javascript
 $json_array = json_encode($time);
        }
        catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }        
        ?>  
<script>
var json =  <?php echo $json_array;?>;
var count = json.length;
var myEvents=[];
for(var i= 0; i<json.length;i++){

var event =
      {
        start: json[i],
        end: json[i],
        title: 'Event ' + i,
        url: '#',
        class: 'custom-class',
        color: 'green',
        data: {/**/} 
      };
           
      myEvents.push(event);
}
$('.event-calendar').equinox({
  events: myEvents
});
 
</script>
<?php 
include 'inc/footer.php';

