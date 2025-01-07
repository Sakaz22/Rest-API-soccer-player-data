<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soccer Players Career Goals</title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background: #0d6efd;
            color: white;
            font-family: 'Arial', sans-serif;
        }
        .chart-container {
            background: white;
            color: black;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            background-color: #000;
        }
        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
        .soccer-icon {
            width: 40px;
            margin-right: 10px;
        }
        .footer {
            background: #000;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="display-4">Soccer Players Career Goals</h1>
                <p class="lead">Explore the career goals of legendary soccer players!</p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-8 chart-container">
                <h3 class="text-center">Career Goals Chart</h3>
                <div id="soccerChart" style="width: 100%; height: 500px;"></div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Soccer Stats. Designed with ⚽ by Soccer Fans.</p>
    </div>

    <script>
        fetch('api.php')
            .then(response => response.json())
            .then(data => {
                const playerNames = data.map(player => `${player.firstname} ${player.lastname}`);
                const careerGoals = data.map(player => player.career_goals);

                const barData = [{
                    x: playerNames,
                    y: careerGoals,
                    type: 'bar',
                    marker: {
                        color: 'rgba(54, 162, 235, 0.7)'
                    }
                }];

                const barLayout = {
                    title: 'Career Goals of Soccer Players',
                    xaxis: { title: 'Players' },
                    yaxis: { title: 'Career Goals' },
                    plot_bgcolor: '#d8f3dc',
                    paper_bgcolor: '#ffffff',
                    font: {
                        color: '#000'
                    },
                    responsive: true
                };

                Plotly.newPlot('soccerChart', barData, barLayout);
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>
</html>
