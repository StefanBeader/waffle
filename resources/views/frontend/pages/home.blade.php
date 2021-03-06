@extends('frontend.layouts.pages')

@section('page')
<header>
    <nav>
        <a class="show-small link" data-scroll="about" href="">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.751 511.751" style="enable-background:new 0 0 511.751 511.751;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M426.529,281.351c-4.713,0-8.533,3.82-8.533,8.533v196.267c0,4.713-3.821,8.533-8.533,8.533h-85.333v-128     c0-14.138-11.462-25.6-25.6-25.6h-85.333c-14.138,0-25.6,11.461-25.6,25.6v128h-85.333c-4.713,0-8.533-3.82-8.533-8.533V289.884     c0-4.713-3.82-8.533-8.533-8.533s-8.533,3.82-8.533,8.533v196.267c0,14.138,11.461,25.6,25.6,25.6h307.2     c14.138,0,25.6-11.461,25.6-25.6V289.884C435.063,285.171,431.242,281.351,426.529,281.351z M307.063,494.684h-102.4v-128     c0-4.713,3.82-8.533,8.533-8.533h85.333c4.713,0,8.533,3.82,8.533,8.533V494.684z"/>
			<path d="M480.315,219.817L274.047,7.482c-10.071-9.976-26.298-9.976-36.369,0L31.436,219.817     c-7.395,7.623-9.491,18.94-5.316,28.706c3.875,9.556,13.172,15.796,23.484,15.761h2.918c6.103-0.059,11.98-2.316,16.555-6.357     c0.609-0.397,1.18-0.848,1.707-1.348L255.863,65.927l185.216,190.754c0.494,0.469,1.028,0.894,1.596,1.271     c4.572,4.025,10.438,6.272,16.529,6.332h2.918c10.321,0.045,19.631-6.196,23.509-15.761     C489.806,238.757,487.71,227.44,480.315,219.817z M469.913,241.884c-1.268,3.198-4.35,5.308-7.791,5.333h-2.918     c-2.258,0.001-4.417-0.925-5.973-2.56c-0.06-0.068-0.154-0.085-0.213-0.145c-0.06-0.06-0.119-0.154-0.196-0.213L261.981,47.734     l-0.102-0.068l-0.043-0.128c-0.411-0.328-0.854-0.614-1.323-0.853c-0.442-0.353-0.92-0.659-1.425-0.913     c-0.524-0.169-1.065-0.284-1.613-0.341c-1.025-0.375-2.15-0.375-3.174,0c-0.548,0.058-1.088,0.172-1.613,0.341     c-0.505,0.255-0.983,0.561-1.425,0.913c-0.469,0.239-0.912,0.525-1.323,0.853l-0.068,0.102l-0.102,0.068L58.888,244.299     c-0.077,0.06-0.111,0.145-0.188,0.205c-0.077,0.06-0.162,0.085-0.222,0.154c-1.557,1.635-3.716,2.561-5.973,2.56h-2.901     c-3.441-0.025-6.522-2.135-7.791-5.333c-1.515-3.451-0.79-7.476,1.835-10.18H43.63L249.889,19.378     c1.573-1.585,3.714-2.477,5.948-2.477c2.233,0,4.374,0.892,5.948,2.477l206.293,212.326     C470.703,234.409,471.428,238.433,469.913,241.884z"/>
			<path d="M289.996,298.418c14.138,0,25.6-11.462,25.6-25.6v-59.733c0-14.139-11.462-25.6-25.6-25.6h-68.267     c-14.138,0-25.6,11.461-25.6,25.6v59.733c0,14.138,11.461,25.6,25.6,25.6H289.996z M213.196,272.818v-59.733     c0-4.713,3.82-8.533,8.533-8.533h68.267c4.713,0,8.533,3.821,8.533,8.533v59.733c0,4.713-3.821,8.533-8.533,8.533h-68.267     C217.016,281.351,213.196,277.53,213.196,272.818z"/>
			<path d="M230.263,417.884h-8.533c-4.713,0-8.533,3.82-8.533,8.533s3.82,8.533,8.533,8.533h8.533c4.713,0,8.533-3.82,8.533-8.533     S234.975,417.884,230.263,417.884z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>            <span>O nama</span>
            </span>
        </a>
        <a class="show-small link" data-scroll="menu" href="">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-42 0 512 512.001"><path d="m135.746094 380.710938c-.988282 1.796874-2.519532 2.335937-3.957032 2.335937s-2.875-.539063-3.863281-2.335937l-10.339843-19.417969v39.371093c0 2.429688-2.964844 3.6875-5.839844 3.6875-2.96875 0-5.84375-1.257812-5.84375-3.6875v-56.183593c0-4.3125 2.875-5.839844 5.84375-5.839844 4.222656 0 6.113281.898437 9.078125 6.199219l11.058593 20.136718 11.054688-20.136718c2.96875-5.300782 4.945312-6.199219 9.171875-6.199219 2.964844 0 5.839844 1.527344 5.839844 5.839844v56.183593c0 2.429688-2.964844 3.6875-5.839844 3.6875-2.96875 0-5.84375-1.257812-5.84375-3.6875v-38.652343zm0 0"/><path d="m190.484375 366.863281h13.664063c2.335937 0 3.683593 2.25 3.683593 4.675781 0 2.066407-1.167969 4.496094-3.683593 4.496094h-13.664063v18.066406h25.4375c2.339844 0 3.6875 2.425782 3.6875 5.214844 0 2.425782-1.167969 5.035156-3.6875 5.035156h-32c-2.605469 0-5.125-1.261718-5.125-3.6875v-58.339843c0-2.425781 2.515625-3.6875 5.125-3.6875h32c2.519531 0 3.6875 2.609375 3.6875 5.035156 0 2.789063-1.347656 5.214844-3.6875 5.214844h-25.4375zm0 0"/><path d="m267.519531 400.664062-19.328125-36.136718v36.136718c0 2.429688-2.964844 3.6875-5.84375 3.6875-2.964844 0-5.84375-1.257812-5.84375-3.6875v-58.339843c0-2.515625 2.878906-3.683594 5.84375-3.683594 4.226563 0 5.933594.898437 8.722656 6.199219l17.347657 33.53125v-36.136719c0-2.515625 2.875-3.597656 5.84375-3.597656 2.875 0 5.839843 1.078125 5.839843 3.597656v58.429687c0 2.425782-2.964843 3.6875-5.839843 3.6875-2.789063 0-5.214844-.898437-6.742188-3.6875zm0 0"/><path d="m332.148438 342.234375c0-2.515625 2.875-3.59375 5.839843-3.59375 2.878907 0 5.84375 1.078125 5.84375 3.59375v42.070313c0 15.011718-9.527343 20.585937-21.574219 20.585937-12.136718 0-21.574218-5.574219-21.574218-20.585937v-42.070313c0-2.515625 2.875-3.59375 5.84375-3.59375 2.875 0 5.839844 1.078125 5.839844 3.59375v42.070313c0 7.011718 3.6875 10.339843 9.890624 10.339843 6.203126 0 9.886719-3.328125 9.886719-10.339843v-42.070313zm0 0"/><path d="m355.257812 422.148438h-42.730468c-4.195313 0-7.59375 3.398437-7.59375 7.589843 0 4.195313 3.398437 7.589844 7.59375 7.589844h42.730468c4.195313 0 7.589844-3.394531 7.589844-7.589844 0-4.191406-3.394531-7.589843-7.589844-7.589843zm0 0"/><path d="m277.207031 422.148438h-172.941406c-4.191406 0-7.589844 3.398437-7.589844 7.589843 0 4.195313 3.398438 7.589844 7.589844 7.589844h172.941406c4.195313 0 7.589844-3.394531 7.589844-7.589844 0-4.191406-3.394531-7.589843-7.589844-7.589843zm0 0"/><path d="m355.257812 306.242188h-250.992187c-4.191406 0-7.589844 3.398437-7.589844 7.589843 0 4.191407 3.398438 7.589844 7.589844 7.589844h250.992187c4.195313 0 7.589844-3.398437 7.589844-7.589844 0-4.191406-3.394531-7.589843-7.589844-7.589843zm0 0"/><path d="m351.035156 212.128906h-7.367187c-2.84375-52.300781-41.074219-95.339844-91.109375-105.527344l1.464844-14.003906c.480468-4.570312-1.011719-9.148437-4.085938-12.558594-3.074219-3.414062-7.472656-5.371093-12.066406-5.371093h-16.214844c-4.597656 0-8.992188 1.960937-12.070312 5.371093-3.074219 3.414063-4.5625 7.992188-4.082032 12.558594l1.464844 14.003906c-50.035156 10.1875-88.265625 53.222657-91.109375 105.523438h-7.367187c-6.515626 0-11.816407 5.300781-11.816407 11.816406v15.664063c0 6.515625 5.300781 11.816406 11.816407 11.816406h242.539062c6.515625 0 11.816406-5.300781 11.816406-11.816406v-15.664063c0-6.511718-5.296875-11.8125-11.8125-11.8125zm-130.167968-121.929687c.210937-.230469.472656-.347657.789062-.347657h16.214844c.3125 0 .578125.117188.789062.347657.210938.234375.300782.511719.265625.820312l-1.417969 13.5625c-2.558593-.171875-5.140624-.269531-7.742187-.269531-2.605469 0-5.183594.097656-7.742187.269531l-1.421876-13.5625c-.03125-.308593.058594-.585937.265626-.820312zm126.800781 146.042969h-235.808594v-8.933594h31.988281c4.195313 0 7.59375-3.398438 7.59375-7.589844s-3.398437-7.589844-7.59375-7.589844h-12.777344c3.242188-51.625 46.265626-92.632812 98.691407-92.632812 52.429687 0 95.453125 41.007812 98.695312 92.632812h-149.289062c-4.195313 0-7.589844 3.398438-7.589844 7.589844s3.394531 7.589844 7.589844 7.589844h168.5zm0 0"/><path d="m409.484375 0h-359.441406c-10.65625 0-19.328125 8.671875-19.328125 19.328125v13.710937h-7.082032c-13.03125 0-23.632812 10.605469-23.632812 23.636719s10.601562 23.636719 23.632812 23.636719h7.082032v32.457031h-7.082032c-13.03125 0-23.632812 10.601563-23.632812 23.636719 0 13.03125 10.601562 23.632812 23.632812 23.632812h7.082032v32.460938h-7.082032c-13.03125 0-23.632812 10.601562-23.632812 23.636719 0 13.03125 10.601562 23.632812 23.632812 23.632812h7.082032v32.460938h-7.082032c-13.03125 0-23.632812 10.601562-23.632812 23.632812 0 13.035157 10.601562 23.636719 23.632812 23.636719h7.082032v32.460938h-7.082032c-13.03125 0-23.632812 10.601562-23.632812 23.632812 0 13.035156 10.601562 23.636719 23.632812 23.636719h7.082032v32.460937h-7.082032c-13.03125 0-23.632812 10.601563-23.632812 23.632813s10.601562 23.636719 23.632812 23.636719h7.082032v13.710937c0 10.65625 8.671875 19.328125 19.328125 19.328125h359.441406c10.65625 0 19.332031-8.671875 19.332031-19.328125v-473.34375c0-10.65625-8.675781-19.328125-19.332031-19.328125zm-378.773437 65.132812h-7.078126c-4.660156 0-8.453124-3.792968-8.453124-8.457031 0-4.660156 3.792968-8.453125 8.453124-8.453125h7.078126zm0 79.726563h-7.078126c-4.660156 0-8.453124-3.792969-8.453124-8.453125 0-4.664062 3.792968-8.453125 8.453124-8.453125h7.078126zm0 79.730469h-7.078126c-4.660156 0-8.453124-3.792969-8.453124-8.453125 0-4.664063 3.792968-8.457031 8.453124-8.457031h7.078126zm0 79.730468h-7.078126c-4.660156 0-8.453124-3.792968-8.453124-8.457031 0-4.660156 3.792968-8.453125 8.453124-8.453125h7.078126zm0 79.726563h-7.078126c-4.660156 0-8.453124-3.789063-8.453124-8.453125 0-4.660156 3.792968-8.453125 8.453124-8.453125h7.078126zm0 79.730469h-7.078126c-4.660156 0-8.453124-3.792969-8.453124-8.453125 0-4.664063 3.792968-8.453125 8.453124-8.453125h7.078126zm382.921874 28.890625c0 2.289062-1.859374 4.152343-4.148437 4.152343h-359.441406c-2.289063 0-4.148438-1.863281-4.148438-4.152343v-473.339844c0-2.285156 1.859375-4.148437 4.148438-4.148437h359.441406c2.289063 0 4.148437 1.863281 4.148437 4.148437zm0 0"/></svg>
            </span>
            <span>Meni</span>
        </a>

        <div class="logo">
            <a href="">Waffle Magacin</a>
        </div>
        <ul class="hidden-small">
            <li>
                <a data-scroll="about" class="link" href="">O nama</a>
            </li>
            <li>
                <a data-scroll="menu" class="link" href="">Meni</a>
            </li>
            <li>
                <a data-scroll="contact" class="link" href="">Kontakt</a>
            </li>
            <li>
                <a data-scroll="map" class="link" href="">Lokacija</a>
            </li>
        </ul>

        <a class="show-small link" data-scroll="contact" href="">
            <span>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 511.874 511.874" style="enable-background:new 0 0 511.874 511.874;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M490.114,12.813H132.568c-12.012,0.014-21.746,9.748-21.76,21.76v98.62l-16.35-24.525     c-7.484-11.289-22.535-14.676-34.133-7.68l-33.638,20.224c-11.016,6.464-19.097,16.946-22.545,29.244     c-12.271,44.681-3.166,121.66,109.824,234.667C203.821,474.885,270.816,499.06,316.99,499.06     c10.69,0.049,21.339-1.34,31.659-4.13c12.293-3.448,22.775-11.518,29.252-22.519l20.198-33.673     c6.968-11.589,3.584-26.609-7.68-34.091l-80.546-53.692c-11.049-7.308-25.859-4.905-34.031,5.521l-23.45,30.148     c-2.451,3.226-6.897,4.166-10.445,2.21l-4.463-2.458c-14.686-8.004-32.964-17.971-69.879-54.886     c-3.994-3.994-7.612-7.731-11.008-11.307h333.517c11.982,0.009,21.713-9.676,21.76-21.658V34.573     C511.86,22.561,502.126,12.827,490.114,12.813z M229.318,401.362l4.335,2.381c10.897,6.093,24.614,3.266,32.213-6.639     l23.45-30.148c2.666-3.396,7.49-4.179,11.093-1.801l80.546,53.692c3.659,2.439,4.759,7.321,2.5,11.093l-20.198,33.673     c-4.218,7.233-11.071,12.553-19.123,14.848c-40.337,11.093-110.933,1.707-218.078-105.446S9.56,195.273,20.627,154.97     c2.293-8.051,7.61-14.903,14.839-19.123l33.673-20.207c3.773-2.254,8.652-1.155,11.093,2.5l53.717,80.546     c2.382,3.602,1.599,8.43-1.801,11.093l-30.157,23.458c-9.903,7.597-12.731,21.311-6.639,32.205l2.389,4.335     c8.533,15.65,19.14,35.123,57.805,73.779C194.212,382.213,213.677,392.828,229.318,401.362z M494.808,298.526     c-0.028,2.567-2.127,4.627-4.693,4.608H141.203c-11.083-12.674-20.64-26.604-28.476-41.506l-2.458-4.48     c-1.96-3.54-1.022-7.982,2.202-10.428l30.157-23.458c10.43-8.17,12.833-22.982,5.521-34.031l-20.275-30.43V34.573     c-0.014-1.249,0.476-2.451,1.359-3.334c0.883-0.883,2.085-1.373,3.334-1.359h357.547c1.249-0.014,2.451,0.476,3.334,1.359     c0.883,0.883,1.373,2.085,1.359,3.334V298.526z"/>
			<path d="M460.725,52.323l-142.618,108.16c-4.035,2.932-9.499,2.932-13.534,0L162.008,52.323     c-3.756-2.849-9.111-2.113-11.959,1.643c-2.849,3.756-2.113,9.111,1.643,11.959l142.583,108.151     c10.144,7.494,23.989,7.494,34.133,0L471.034,65.925c1.805-1.368,2.992-3.398,3.299-5.642c0.307-2.244-0.29-4.518-1.661-6.321     C469.824,50.213,464.478,49.48,460.725,52.323z"/>
			<path d="M238.517,174.793l-87.415,93.611c-3.214,3.447-3.025,8.848,0.422,12.062c3.447,3.214,8.848,3.025,12.062-0.422     l87.416-93.653c2.888-3.484,2.553-8.617-0.762-11.698C246.924,171.612,241.78,171.656,238.517,174.793z"/>
			<path d="M384.728,174.793c-3.214-3.447-8.614-3.637-12.062-0.422c-3.447,3.214-3.637,8.614-0.422,12.062l87.39,93.611     c3.214,3.447,8.614,3.637,12.062,0.422c3.447-3.214,3.637-8.614,0.422-12.062L384.728,174.793z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>            </span>
            <span>Kontakt</span>
        </a>
        <a class="show-small link" data-scroll="map" href="">
            <span>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve">
<g>
	<path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5   s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"/>
	<path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952   L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4   C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031   C45.576,13.08,46.321,24.468,41.099,31.431z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>            </span>
            <span>Lokacija</span>
        </a>
    </nav>
</header>
<main class="wrapper">
    <section id="about" class="about section">
        <div class="about-content">
            <div class="image">
                <img class="responsive-image" src="{{ asset('images/1.jpg') }}" alt="">
            </div>
            <div class="about-text">
                <h1>Waffle Magacin</h1>
                <p>Dobrodošli U Waffle Magacin koji se nalazi na uglu Cara Dušana i Bulevara Cara Lazara.</p>
                <p>Ovde u Waffle Magacinu vafle su više od obroka. To je ljubav na prvi zalogaj.</p>
                <p>Specijalizovani smo za slatke i slane Belgijske vafle.</p>
                <p>Sva hrana je sveže pripremljena sa kvalitetnim sastojcima, posebno odabranim za Vaše potpuno uživanje u hrani.</p>
                <p>Posetitite nas na našoj adresi, željno Vas očekujemo.</p>
                <p>Takođe nudimo usluge keteringa za Vaše rođendanske zabave, prijeme...</p>
            </div>
        </div>
    </section>
    <section id="menu" class="menu section">
        <div class="menu-content">
            <h2>Meni</h2>
            <div class="menu-buttons">
                <button class="menu-btn sweet">Slatko</button>
                <button class="menu-btn salty">Slano</button>
            </div>
            @foreach($menu as $flavourKey => $flavour)
                @foreach($flavour as $key => $category)
                    <div class="category" data-flavourId="{{ $flavourKey }}">
                    <h3>{{ \App\Models\FoodType::getNameByid($key) }}</h3>
                    <hr>
                    <ul>
                        @foreach($category as $item)
                            <li class="tooltip">
                                <span>{{ $item->name }}</span>
                                <span class="cena">{{ $item->price }} RSD</span>
                                <div class="tooltiptext">
                                    <div class="tooltip-image">
                                        @if(file_exists(public_path('images/menu-items/' . $item->id . '.jpg')))
                                            <img src="{{ asset('images/menu-items/' . $item->id . '.jpg') }}" alt="">
                                        @endif
                                    </div>
                                    <h4>Sastojci:</h4>
                                    <div class="ingredients">
                                        @foreach($item->ingredients as $ingredient)
                                            <span class="ingredient">{{ $ingredient->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            @endforeach
        </div>
    </section>
    <section id="contact" class="contact section">
        <div class="contact-content">
            <div class="hours">
                <h2>Radno vreme</h2>
                <div class="working-hours">
                    <h4>Radni dani</h4>
                    <p>09:00-21:00</p>
                </div>
                <div class="working-hours">
                    <h4>Subota</h4>
                    <p>09:00-21:00</p>
                </div>
            </div>
            <div class="contact-form">
                <h2>Pošaljite nam poruku</h2>
                <form action="#" id="contact-form">
                    {{ @csrf_field() }}
                    <input type="text" name="name" id="messageName" placeholder="Vaše Ime">
                    <input type="email" class="required" name="email" id="messageEmail" placeholder="Vaša E-mail Adressa">
                    <input type="text" class="required" name="content" id="messageContent" placeholder="Poruka">
                </form>
                <button type="submit" id="sendMessage">Pošalji</button>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="address">
                    <h4>Adresa</h4>
                    <p>Cara Dušana 75</p>
                    <p>21000, Novi Sad</p>
                    <p>Srbija</p>
                </div>
                <div>
                    <h4>E-mail</h4>
                    <p>wafflemagacin@gmail.com</p>
                    <h4>Telefon</h4>
                    <p>060 543 3463</p>
                </div>
                <div class="social-media">
                    <h4>Socijalne mreže</h4>
                    <a href="https://www.facebook.com/wafflemagacin/" target="_blank" class="social-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<g>
    <path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998   C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41   h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z" fill="#FFFFFF"/>
</g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </a>
                    <a href="https://www.instagram.com/waffle_magacin/" target="_blank" class="social-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00096 512.00096" width="512px" height="512px"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0" fill="#FFFFFF"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0" fill="#FFFFFF"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0" fill="#FFFFFF"/></svg>
                    </a>
                </div>
            </div>
        </footer>
    </section>
    <div id="map"></div>
</main>
<div id="success">Uspesno ste poslali poruku</div>
<div id="error">Desila se greska</div>
@endsection