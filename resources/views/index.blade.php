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
                <p>At Bolomba Metals, we are a diversified base metals mining company with a focus on extracting and
                processing essential base metals including copper, zinc, gold, and nickel.</p>
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
                        <img src="{{ asset('assets/images/mining.png') }}" alt="Mining">
                    </div>

                    <div class="text">
                        <h3>Mining Solutions</h3>
                        <p>We specialize in the extraction of high-value minerals such as gold and diamonds, catering to
                            a diverse range of global clients.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/mineral-separation.png') }}" alt="Mineral Separation">
                    </div>

                    <div class="text">
                        <h3>Mineral Separation</h3>
                        <p>Our advanced mineral separation and recovery services ensure maximum transparency and
                            accuracy, delivering unparalleled results.</p>

                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/rare-mineral-sales.png') }}" alt="Rare Mineral Sales">
                    </div>

                    <div class="text">
                        <h3>Rare Mineral Sales</h3>
                        <p>We offer carefully inspected, validated, and refined rare minerals to meet the exacting
                            standards of our extensive client base.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Contact_Us">
        <div class="containter_fluid">
            <p>Do you want to get in touch with us?</p>
            <div class="button">
                <a href="{{ route('contact') }}">Contact Us</a>
            </div>
        </div>
    </section>
</x-general-layout>
