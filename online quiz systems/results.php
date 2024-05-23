<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
        <nav>
            <div class="vertical-container">
                <div class="logo">
                    <p>Online Quiz Platform</p>
                </div>
            </div>
            <ul>
                <div class="vertical-container">
				<li><a href="index.php">Categories</a></li>
                    <li><a href="questions.php">Questions</a></li>
					<li><a href="quizzes.php">Quizzes</a></li>
                    <li><a href="quizcategories.php">Quiz categories </a></li>
                    <li><a href="results.php">Results</a></li>
                    <li><a href="userprofiles.php">User profiles</a></li>
                    <li><a href="userresponses.php">User responses</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="choices.php">Choices</a></li>
                    <li><a href="users.php">Users</a></li>
                   
            </ul>
        </nav>
    </header>
    <section>
		<h4><center>categories</center></h4>
		<div class="container">
		<table>
        <center>
			<thead>
                
				<tr>
				    <th>Result id</th>
				    <th>User id</th>
					<th>Quiz id</th>
					<th>Score</th>
				    <th>Completed_at</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Connect to database
				$conn = mysqli_connect("localhost", "root", "", "online_quiz_platform");
				
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				// Fetch data from database
				$sql = "SELECT * FROM results";
				$result = mysqli_query($conn, $sql);
				
				// Display data
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row["result_id"] . "</td>";
						echo "<td>" . $row["user_id"] . "</td>";
						echo "<td>" . $row["quiz_id"] . "</td>";
						echo "<td>" . $row["score"] . "</td>";
						echo "<td>" . $row["completed_at"] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data available</td></tr>";
				}
				
				// Close connection
				mysqli_close($conn);
				?>
			</tbody>
			</div>
            <center>
		</table> 
		</div>
</body>
</html>
