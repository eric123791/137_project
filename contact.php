

<html>
	<head>
		<title>Contact Us</title>
		<script type="text/javascript" src = "js/feedback.js"></script>
	</head>

	<body>
		<form id = "feedbackForm" action = "" onsubmit = "processFeedback()">
			<fieldset>
				<table>
					<tr valign = "top">
						<th colspan="2"><h1>TicketzHub Customer Feedback Form</h1></th>
					</tr>
					<tr valign = "top">
						<td>Name: </td>
						<td><input type = "text" name = "name" /></td>
					</tr>
					<tr valign = "top">
						<td>Email: </td>
						<td><input type = "email" name = "email" /></td>
					</tr>
					<tr valign = "top">
						<td>Feedback Type: </td>
						<td>
							<select name = "type">
								<option>Question</option>
								<option>Compliment</option>
								<option>Complaint</option>
								<option>Suggestion</option>
								<option>Bug Report</option>
								<option>Website Typo</option>
							</select>
						</td>
					</tr>
					<tr valign = "top">
						<td>Comments: </td>
					</tr>
					<tr valign = "top">
						<td colspan="2"><textarea name = "comments" rows = "6" cols = "65"></textarea></td>
					</tr>
					<tr valign = "top">
						<td>Check here if you would like a reply: </td>
						<td><input type = "checkbox" name = "reply" value = "reply" /></td>
					</tr>
					<tr>
						<td><input type = "submit" value = "Submit" /></td>
						<td><input type = "reset" value = "Reset" /></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>