<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome to the referral page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="main p-6 bg-white border-b border-gray-200">
                    <div>
                        Copy the link below to refer others to this platform:

                        <br />

                        <a id = "referral-link" href="Auth::user()->referral_code">Auth::user()->referral_code</a>
                       
                        <i style = "padding : 8px; pointer : cursor" onclick = "javascript:void(0); copyReferralLink();" class = "bi bi-clipboard"></i>
                        
                    
                        <br />
                        <br />

                        Copy your referral code : <br />
                        <p id = "referral">
                            Auth::user()->referral_code 
                            <i style = "padding : 8px; pointer : cursor" onclick = "javascript:void(0); copyReferral();" class = "bi bi-clipboard"></i>
                        </p>
                
                    </div>

                    <div>
                        YOU ARE YET TO REFER ANY USER
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyReferral() {
                let text = document.getElementById('referral').innerText;
                navigator.clipboard.writeText(text);
                alert('Referral Code Copied');
            }

        function copyReferralLink() {
                let text = document.getElementById('referral-link').innerText;
                navigator.clipboard.writeText(text);
                alert('Referral Link Copied');
            }
    </script>
</x-app-layout>