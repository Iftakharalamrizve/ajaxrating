	function getrating(rating){
		$('.fa').each(function() {
			var value=$(this).data('rating');
			if(value<=rating){
				$(this).removeClass('fa-star-o').addClass('fa-star');
			}else{
				$(this).removeClass('fa-star').addClass('fa-star-o');
			}
		});

		$.ajax({
			url: 'db.php',
			type:"POST",
			data: {rating_value:rating,user_id:2},
			success:function(response){
				
			}
		
		});
		
	}
