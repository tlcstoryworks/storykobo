
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A workshop of worlds. A welcoming third place for writers to create, learn, and celebrate every win.">
    <title>storykōbō — A workshop of worlds</title>
    <style>
        :root {
            --paper: #f6f2e9;
            --ink: #292b27;
            --muted: #65675d;
            --forest: #405b49;
            --forest-dark: #304638;
            --clay: #b86f52;
            --line: #d9d2c4;
            --white: #fffdf8;
        }

        * { box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 2rem;
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--ink);
            font-family: Georgia, "Times New Roman", serif;
            line-height: 1.7;
        }

        a { color: inherit; }

        .container {
            width: min(1080px, calc(100% - 40px));
            margin-inline: auto;
        }

        header {
            border-bottom: 1px solid var(--line);
        }

        .nav {
            min-height: 88px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            color: var(--ink);
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
            letter-spacing: -1px;
        }

        .brand span { color: var(--forest); }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
            font-family: Arial, sans-serif;
            font-size: .9rem;
        }

        .nav-links a { text-decoration: none; }
        .nav-links a:hover { color: var(--forest); }

        .button {
            display: inline-block;
            padding: 12px 21px;
            border: 1px solid var(--forest);
            border-radius: 4px;
            background: var(--forest);
            color: white;
            font-family: Arial, sans-serif;
            font-size: .9rem;
            font-weight: bold;
            text-decoration: none;
            transition: background .2s ease;
        }

        .button:hover {
            background: var(--forest-dark);
        }

        .button-secondary {
            background: transparent;
            color: var(--forest);
        }

        .button-secondary:hover {
            background: #e9e8dc;
            color: var(--forest-dark);
        }

        .eyebrow {
            color: var(--clay);
            font-family: Arial, sans-serif;
            font-size: .78rem;
            font-weight: bold;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .hero {
            padding: 100px 0 110px;
            display: grid;
            grid-template-columns: 1.35fr .65fr;
            align-items: center;
            gap: 64px;
        }

        h1, h2, h3 { line-height: 1.15; }

        h1 {
            max-width: 680px;
            margin: 18px 0 24px;
            font-size: clamp(2.8rem, 6vw, 5.1rem);
            font-weight: normal;
            letter-spacing: -.055em;
        }

        .hero-copy {
            max-width: 600px;
            color: var(--muted);
            font-size: 1.15rem;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        .bookplate {
            position: relative;
            padding: 34px 28px;
            border: 1px solid var(--line);
            background: var(--white);
            text-align: center;
            box-shadow: 8px 8px 0 #e8e0d2;
        }

        .bookplate::before {
            content: "✳";
            display: block;
            margin-bottom: 18px;
            color: var(--clay);
            font-size: 2.7rem;
        }

        .bookplate h2 {
            margin: 0 0 14px;
            font-size: 1.8rem;
            font-weight: normal;
        }

        .bookplate p {
            margin: 0;
            color: var(--muted);
        }

        .section {
            padding: 82px 0;
            border-top: 1px solid var(--line);
        }

        .section-heading {
            max-width: 650px;
            margin-bottom: 38px;
        }

        .section-heading h2 {
            margin: 12px 0;
            font-size: clamp(2rem, 4vw, 3.1rem);
            font-weight: normal;
            letter-spacing: -.035em;
        }

        .section-heading p { color: var(--muted); }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .card {
            padding: 28px;
            border: 1px solid var(--line);
            background: rgba(255, 253, 248, .65);
        }

        .card-mark {
            color: var(--clay);
            font-size: 1.6rem;
        }

        .card h3 {
            margin: 14px 0 10px;
            font-size: 1.35rem;
        }

        .card p {
            margin: 0;
            color: var(--muted);
        }

        .invitation {
            padding: 70px 24px;
            background: var(--forest);
            color: white;
            text-align: center;
        }

        .invitation .eyebrow { color: #e7b69c; }

        .invitation h2 {
            margin: 14px 0;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: normal;
        }

        .invitation p {
            max-width: 600px;
            margin: 0 auto 26px;
            color: #e4e8df;
        }

        .invitation .button {
            border-color: var(--white);
            background: var(--white);
            color: var(--forest-dark);
        }

        .invitation .button:hover { background: #e9e8dc; }

        footer {
            padding: 28px 0;
            color: var(--muted);
            font-family: Arial, sans-serif;
            font-size: .85rem;
        }

        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        footer a { text-decoration: none; }
        footer a:hover { color: var(--forest); }

        @media (max-width: 720px) {
            .nav {
                padding: 18px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            .nav-links {
                width: 100%;
                flex-wrap: wrap;
                gap: 16px;
            }

            .hero {
                padding: 65px 0 75px;
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .bookplate { max-width: 420px; }

            .cards { grid-template-columns: 1fr; }

            .section { padding: 60px 0; }
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition: none !important; }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container nav" aria-label="Main navigation">
            <a class="brand" href="/" aria-label="storykōbō home">
                storyk<span>ō</span>bō
            </a>
            <div class="nav-links">
                <a href="#about">Our idea</a>
                <a href="#community">The community</a>
                <a class="button" href="{{ route('register') }}">Join storykōbō</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="container hero">
            <div>
                <p class="eyebrow">A workshop of worlds</p>
                <h1>A place to make room for your stories.</h1>
                <p class="hero-copy">
                    Every writer deserves a place to settle in, try something new,
                    find their people, and make a little progress. Pull up a chair.
                    There's room for you here.
                </p>
                <div class="hero-actions">
                    <a class="button" href="{{ route('register') }}">Come on in</a>
                    <a class="button button-secondary" href="#about">Explore the idea</a>
                </div>
            </div>

            <aside class="bookplate" aria-label="Our philosophy">
                <h2>Make. Learn. Share.</h2>
                <p>
                    Part library. Part workshop. Part coffeehouse.
                    A welcoming third place for the people who make stories.
                </p>
            </aside>
        </section>

        <section class="section" id="about">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">A little room to grow</p>
                    <h2>Writing is the work. You don't have to do it alone.</h2>
                    <p>
                        storykōbō is being built as a home for writers at every
                        stage, whether you're drafting your first page, revising
                        a familiar world, or figuring out what comes next.
                    </p>
                </div>

                <div class="cards">
                    <article class="card">
                        <span class="card-mark" aria-hidden="true">✳</span>
                        <h3>Find your rhythm</h3>
                        <p>
                            Make space for focused writing sessions, small steps,
                            and the kind of progress that adds up over time.
                        </p>
                    </article>

                    <article class="card">
                        <span class="card-mark" aria-hidden="true">⌁</span>
                        <h3>Make things together</h3>
                        <p>
                            Learn alongside other writers, exchange ideas, and
                            find encouragement without needing to compete.
                        </p>
                    </article>

                    <article class="card">
                        <span class="card-mark" aria-hidden="true">✦</span>
                        <h3>Celebrate every win</h3>
                        <p>
                            Finished a chapter? Solved a tricky paragraph?
                            Showed up on a difficult day? It all counts.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" id="community">
            <div class="container">
                <div class="section-heading">
                    <p class="eyebrow">A community with room to breathe</p>
                    <h2>Not another race to the finish line.</h2>
                    <p>
                        We're shaping storykōbō around the things that bring
                        writers together: focused event challenges, creative
                        workshops, shared sprints, and celebrations of all the
                        work that goes into making something wonderful.
                    </p>
                    <p>
                        This space is still growing. We're laying the foundations
                        now, with the hope of making something welcoming, useful,
                        and built to last.
                    </p>
                </div>
            </div>
        </section>

        <section class="invitation">
            <div class="container">
                <p class="eyebrow">Your chair is waiting</p>
                <h2>Every story starts somewhere.</h2>
                <p>
                    Come help us build a place where writers can do their work,
                    find their people, and celebrate every win—no matter the size.
                </p>
                <a class="button" href="{{ route('register') }}">Create your account</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-inner">
            <a class="brand" href="/">storyk<span>ō</span>bō</a>
            <span>A workshop of worlds. Made for writers.</span>
        </div>
    </footer>
</body>
</html>

