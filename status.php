<?PHP
# Randomly generate a status.
if(rand(1,5)==1){
  http_response_code(200);
} else {
	http_response_code(500);
}
?>
