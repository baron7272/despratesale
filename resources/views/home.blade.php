<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://use.fontawesome.com/637c14c0d1.js"></script>
    <title>Cart</title>

    <style>
        .flex-container>div {
            background-color: blanchedalmond;
            margin: 20px;
            line-height: 150px;
        }

        .hd {
            /* position:; */
            right: 450px;
        }

        .flex-container {
            display: flex;
            flex-direction: column;
        }

        body {
            background-color: #f8f8f8;
        }

        h1,
        .h1 {
            font-size: 2.5rem;
            line-height: 1.2;
        }

        nav {
            border-bottom: 1px solid rgb(219, 215, 215);
            padding: 10px;
            display: flex;
            justify-content: space-around;

        }

        nav a {
            text-decoration: none;
            font-size: 12px;
            color: rgb(60, 60, 60);
            padding: 0px 9px;
            font-weight: bold;
        }

        svg {
            height: 30px;
            width: 30px;
        }

        .div-h1 {
            text-align: center;
            font-weight: 300;
            letter-spacing: 4px;
            margin: 2px 0;
        }

        .select-div {
            display: flex;
            justify-content: center;
        }

        .left,
        .right {
            height: 42.5rem;
            width: 18%;
        }

        .cap-left-right {
            width: 40%;
            padding: 1px;
            text-align: center;
            display: flex;
            justify-content: space-around;

        }

        .cap-middle {
            padding: 1px;
            text-align: center;
            display: flex;
            justify-content: space-around;
            width: 20%;
        }

        .middle {
            width: 64%;
        }

        .col {
            float: left;
        }

        .allignment {
            text-align: center;
        }

        .allignment-ft {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            padding-top: 20px;
        }

        .row {
            width: 100%;
            content: "";
            display: table;
            clear: both;
        }

        .select-div Select {
            width: 500px;
            height: 30px;
            margin: 0 20px 20px 20px;
            padding: 2px 10px 2px 10px;
            box-sizing: content-box;
            cursor: pointer;
            border: 0.2px solid rgb(203, 200, 200);
        }

        .column-div {
            background-color: #f8f8f8;
            height: 42rem;
            display: flex;
            justify-content: space-between;
            margin: 2px 14rem;
        }

        .colsub1 {
            width: 20%;
            background-color: #2c3538;
            height: 42.5rem;
        }

        .colsub2 {
            width: 80%;
            background-color: aquamarine;
            display: flex;
            justify-content: space-between;
            overflow: auto;
        }

        .fit {}


        .div__1>h4,
        h5 {
            color: #b7b9ba;
            font-weight: bold;
        }

        .div__2 {
            /* background-color: blue; */
            height: 40rem;
            width: 60rem;
            border: 0 !important;
        }

        ul h4 {
            color: #b7b9ba;
            font-size: 19px;
            font-size: 20px;
            font-weight: bold;
        }

        ul {
            padding: 0 !important;
        }

        li {
            color: #b7b9ba;
            font-size: 17px;
            list-style: none;
            padding: 5px 0 !important;
        }

        .footer {
            display: grid;
            margin: 7px 14rem;
        }

        span {
            font-size: 12px;
        }

        footer>p {
            margin: 15px 14rem;
        }

        .scrollable-div {
            height: 40rem;
            width: 60rem;
            overflow: auto;
            border: 1px solid #ccc;
            padding: 1px;
        }

        .card {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            background: none !important;
            padding: 10px 30px;
        }

        .card-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 10px;
            padding: 5px 300px 0px 10px !important;
        }

        .card-item {
            /* border: 1px solid #ddd; */
            padding: 10px 10px;
            height: 300px;
            width: 220px;
            margin: 0 3px;
            background-color: #ffffff;
        }

        img {
            width: 200px;
            height: 200px;
        }

        .price__list {
            display: grid;
            justify-content: center;
        }

        .price__list>div {
            display: grid;
            justify-content: center;
        }

        .price__list>div>span {
            font-size: 15px;
        }

        .img-icon {
            width: 23px;
            height: 23px;
        }

        .img-pics {
            width: 40px;
            height: 23px;
        }

        /*
Select option{
    padding: 4px 10px;
} */

        button {
            width: 80%;
            height: 50px;
            border: 1px solid grey;
        }

        .footer__foot {
            display: flex;
            justify-content: space-between;
            margin: 7px 14rem;
        }

        .foot__img {
            display: flex;
        }

        .foot__img>img {
            width: 20px;
            height: 20px;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <header>
        <nav>

            <div class="row">

                <!-- Generator: Adobe Illustrator 19.2.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297.172 477.857" style="enable-background: new 0 0 297.172 477.857" xml:space="preserve">
                    <g>
                        <path style="fill: #1c1d1f" d="M128.209,477.857c-10.16-5.826-19.501-11.188-28.847-16.542
            c-31.881-18.264-63.743-36.561-95.683-54.721c-2.636-1.499-3.681-3.05-3.679-6.13c0.079-132.16,0.068-264.32,0.068-396.48
            c0-1.1,0-2.199,0-3.984c1.879,1.036,3.158,1.717,4.414,2.437c39.807,22.823,79.589,45.689,119.46,68.4
            c3.112,1.772,4.487,3.529,4.366,7.261c-0.313,9.656,0.031,19.332-0.178,28.994c-0.074,3.414,0.772,5.213,4.217,6.59
            c53.365,21.326,106.643,42.867,160.008,64.192c3.684,1.472,4.824,3.213,4.816,7.184c-0.142,73.996-0.124,147.992-0.038,221.989
            c0.004,3.326-0.885,5.305-3.811,7.191c-17.174,11.065-34.175,22.399-51.863,34.057c0-57.546,0-114.402,0-171.163
            c-2.172-0.814-3.152,0.648-4.306,1.348c-34.693,21.047-69.33,42.186-104.082,63.135c-3.248,1.958-4.508,3.933-4.507,7.798
            c0.01,40.83-0.204,81.661-0.355,122.492C128.204,473.56,128.209,475.217,128.209,477.857z" />
                        <path style="fill: #f8f8f8" d="M128.541,115.77c54.466,22.166,108.713,44.242,163.728,66.632
            c-54.744,33.383-108.977,66.455-163.728,99.842C128.541,226.519,128.541,171.402,128.541,115.77z" />
                    </g>
                </svg>
                <a href="">Home</a>
                <a href="">Products</a>
                <a href="">Contact</a>
            </div>

        </nav>
    </header>
    <div>
        <div class="row">
            <div class="col cap-left-right">
            </div>
            <div class="col cap-middle">
                <h1>Distress Sales!</h1>
                <p>new sales</p>
            </div>
            <div class="col cap-left-right">
            </div>
        </div>
    </div>
    <div class="select-div">
        <select>
            <option value="Select Country">Select Country</option>
        </select>
        <select>
            <option value="Select Country">Select State</option>
        </select>
        <select>
            <option value="Select Country">Select City</option>
        </select>
    </div>


    <div class="row">
        <div class="col left allignment">
            <div class="flex-container">
                <div> Advert</div>
                <div> Advert</div>
                <div> Advert</div>
                <div> Advert</div>
            </div>
            <!-- <p>Please contact us for your ads</p> -->
        </div>
        <div class="col middle">
            <div class="col allignment colsub1">
                <div class="">
                    <ul>
                        <h4>Categories</h4>
                        <li>All</li>
                        <li>Electronics</li>
                        <li>Arts</li>
                        <li>Books</li>
                        <li>Sports/Equipments</li>
                        <li>Kids/Gooddies</li>
                    </ul>
                    <h5>Price Range</h5>

                    <!-- <div class="foot_link">
                        <li>No 8 Metropolitian College Road,</li>
                        <li>Ire-Akari Isolo, Lagos State</li>
                        <li>+23480 6854 8565</li>
                    </div> -->
                </div>
            </div>
            <div class="col colsub2">
                <div class="scrollable-div ">
                    <div class="card">
                        <div class="card-row">
                            <div class="card-item">
                                <img src="img/1.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/2.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/3.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-row">
                            <div class="card-item">
                                <img src="img/4.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/5.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/6.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-row">
                            <div class="card-item">
                                <img src="img/7.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/8.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/9.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-row">
                            <div class="card-item">
                                <img src="img/10.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/11.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/12.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-row">
                            <div class="card-item">
                                <img src="img/13.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/14.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$156</span>
                                    </div>

                                </div>
                            </div>
                            <div class="card-item">
                                <img src="img/33.jpg" alt="">
                                <div class="price__list">
                                    <h4>Cabriole</h4>
                                    <div>
                                        <span>$1568</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <button> More</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="col left allignment">
            <div class="flex-container">
                <div> Advert</div>
                <div> Advert</div>
                <div> Advert</div>
                <!-- </div> -->
                <div class="foot__img">
                    <div>
                        <span>No 8 Metropolitian College Road,Ire-Akari Isolo, Lagos State +23480 6854 8565
                        </span>
                    </div>

                    <img src="img/twitter.png" alt="">
                    <img src="img/pinterest.png" alt="">
                    <img src="img/facebook.png" alt="">
                    <img src="img/insta.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="allignment-ft">
            <span>Copyright © All Rights Reserved 2020</span>
        </div>
    </footer>
</body>

</html>