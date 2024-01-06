<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Light Gray Background */
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            align-items: center;
        }

        header {
            background-color: #ddd;
            padding: 1em;
            border-bottom: 2px solid #999;
            width: 100%;
            text-align: center;
        }

        h1 {
            color: #333;
            margin: 0;
        }

        button {
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            font-size: 1em;
            position: absolute;
            left: 20px;
            margin-top: 15px;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            max-width: 800px;
            background-color: #fff; /* White Background */
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            color: #333;
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
            margin: 0 auto 15px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: block;
        }

        h2 {
            color: #555;
            border-bottom: 2px solid #555;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        p {
            line-height: 1.8;
            margin-bottom: 15px;
        }

        a {
            color: #4CAF50; /* Green Color */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #45a049; /* Darker Green on Hover */
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #ddd;
            color: #333;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <button onclick="goBack()">Back</button>
        <h1>It’s a new era in design, there are no rules</h1>
    </header>
    <br>
    <br>
    <main>
        <section>
            <img src="assets/images/blog2.png" alt="Blog Post Image">
            <h2>By Chethana Hapuarachchi</h2>
            <p>Published on January 10, 2024</p>
            <p>
                In this new era of design, the traditional boundaries and constraints that once governed creative expression have been shattered, giving rise to a limitless landscape where there are no rules. Designers now find themselves liberated from the shackles of convention, allowing their imagination to soar to unprecedented heights. This paradigm shift marks a departure from the rigid guidelines that used to define design disciplines, encouraging a more fluid and experimental approach to the creative process.
            </p>
            <p>
                With the absence of rules, designers are empowered to explore uncharted territories, blending diverse styles, mediums, and influences to create truly innovative and boundary-pushing works of art. This newfound freedom fosters a culture of risk-taking and encourages designers to challenge the status quo, fostering a spirit of rebellion against the expected norms. The absence of rules doesn't signify chaos; rather, it signals a departure from the notion that creativity can be confined within predefined parameters.
            </p>
            <p>
                The elimination of rules in design also heralds a democratization of the creative process. Previously, design was often perceived as an exclusive realm reserved for those well-versed in its principles. Now, accessibility and inclusivity take center stage, allowing a broader range of voices and perspectives to contribute to the design landscape. This democratization paves the way for a more diverse array of designs, reflective of the myriad influences and experiences of a globalized world.
            </p>
            <p>
                In this rule-free era, collaboration becomes a cornerstone of design innovation. With no fixed guidelines dictating the boundaries of creative expression, designers are free to engage in interdisciplinary collaborations, breaking down silos and drawing inspiration from fields beyond their own. This cross-pollination of ideas results in a rich tapestry of design, where influences from various disciplines converge to create truly unique and groundbreaking outcomes.
            </p>
            <p>
                As we navigate this new era in design, it becomes clear that the absence of rules is not a vacuum but an invitation to redefine the very essence of creativity. It challenges designers to question, experiment, and evolve, fostering a dynamic and ever-changing landscape that mirrors the constantly shifting nature of human expression. In this design utopia where rules are obsolete, the possibilities are boundless, and creativity knows no bounds.
            </p>

            <p>For more details, visit our <a href="#">website</a>.</p>
        </section>
    </main>
<br>
<br>
    <footer>
        <p>&copy; 2024 DESKANO-Blog. All rights reserved. | Designed by <a href="https://www.deskano.com" target="_blank">DESKANO</a></p>
        <p>Follow us on <a href="https://twitter.com/deskanoblog" target="_blank">Twitter</a> | Connect on <a href="https://www.linkedin.com/company/deskanoblog" target="_blank">LinkedIn</a></p>
    </footer>
    

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>
