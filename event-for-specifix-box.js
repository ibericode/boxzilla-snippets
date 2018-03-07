Boxzilla.on('box.show', function(box) {
	// only run for the box with ID 5200
	if( box.id != 5200 ) { return; }
	console.log("Showing box with ID 5200!");
});
