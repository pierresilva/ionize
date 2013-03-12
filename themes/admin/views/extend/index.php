<?php

/**
 * Displays out all the extends fields
 *
 */

?>


<div id="maincolumn">


	<!-- Tables of existing extended fields.
		 Must be named like this : extend_fields_<table_type>
	-->
	<div id="extend_fields" class="sortable-container"></div>


	<script type="text/javascript">

		// Get Extends fields table
		ION.updateElement({element:'extend_fields', url:'extend_field/get_extend_fields'});

	</script>

</div>

<script type="text/javascript">
	
	// Panel toolbox
	ION.initToolbox('extend_fields_toolbox');

</script>
