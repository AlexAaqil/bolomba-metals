<x-general-layout class="Home">
    <section class="Hero">
        <div class="container_fluid">
            {{-- <div class="visual">
                <video src="#" loop muted autoplay></video>
            </div> --}}
            <div class="visual">
                <img src="{{ asset('assets/images/bolomba-metals-hero.jpg') }}" alt="Bolomba Metals">
            </div>

            <div class="text">
                <h1>Leading the Future <br> of Metals and Minerals Mining</h1>
            </div>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="text">
                <h2>About Bolomba Metals</h2>
                <p>Bolomba Metals is a premier diversified mining company dedicated to the extraction and processing of vital base metals. Our operations are focused on key resources including copper, zinc, gold, and nickel, which are essential for various industrial applications.</p>
                <p>Located at the northeast of the provincial capital of Mbandaka, our strategic positioning enhances our accessibility to important logistical routes and supports our commitment to efficient and sustainable mining practices. At Bolomba Metals, we are committed to driving innovation, ensuring environmental stewardship, and contributing to the economic development of the region.</p>
                <div class="btn">
                    <a href="{{ route('about') }}">Learn more about us</a>
                </div>
            </div>

            <div class="image">
                <img src="{{ asset('assets/images/bolomba-metals-about.jpg') }}" alt="About Bolomba Metals">
            </div>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <h2>Our Services</h2>

            <div class="services_wrapper">
                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/bolomba-metals-mining-solutions.jpg') }}" alt="Mining">
                    </div>

                    <div class="text">
                        <h3>Comprehensive Mining Solutions</h3>
                        <p>Our expertise lies in the meticulous extraction of valuable minerals, including gold and diamonds. We are committed to serving a wide array of international clients, providing tailored solutions that meet their unique needs and expectations.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/bolomba-metals-mineral-separation-2.jpg') }}" alt="Mineral Separation">
                    </div>

                    <div class="text">
                        <h3>State-of-the-Art Mineral Separation</h3>
                        <p>Utilizing cutting-edge technology and techniques, our mineral separation and recovery services are designed to achieve the highest levels of transparency and precision. We are dedicated to delivering exceptional results that exceed industry standards.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/bolomba-metals-rare-minerals-sales.png') }}" alt="Rare Mineral Sales">
                    </div>

                    <div class="text">
                        <h3>Exclusive Rare Mineral Sales</h3>
                        <p>We provide a curated selection of rare minerals, each thoroughly inspected, validated, and refined to adhere to the most stringent quality standards. Our offerings are tailored to meet the discerning requirements of our diverse and extensive clientele.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Contact_Us">
        <div class="container_fluid">
            <p>Do you want to get in touch with us?</p>
            <div class="button">
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </section>
</x-general-layout>
