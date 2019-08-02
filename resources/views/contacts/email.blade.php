<table class="table table-dark" border="1px;">
	
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Phone</td>
		<td>Company Name</td>
		<td>Subject</td>
		<td>Message</td>

	</tr>	
	
	<tr>
		<td>{{ $data['name'] }}</td>
		<td>{{ $data['email'] }}</td>
		<td>{{ $data['phone'] }}</td>
		<td>{{ $data['comp_name'] }}</td>
		<td>{{ $data['subject'] }}</td>
		<td>{{ $data['message'] }}</td>
	</tr>
</table>
