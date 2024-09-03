<?PHP
# Randomly generate a status.
if(rand(1,2)==1){
  http_response_code(200);
} else {
	http_response_code(500);
}
?>
