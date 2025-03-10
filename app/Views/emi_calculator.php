<?php include('header.php') ?>
<main>
    <section>
        <section class="relative z-[20] bg-[url('./assets/img/photos/emi-calcuator-banner.webp')] py-[150px] bg-cover bg-bottom h-[75vh]">
            <!-- <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-[50%]">
                        <p class="text-[#000] font-bold text-[25px] lg:text-[35px] pt-10 leading-tight">Believing, banking and<br>
                            achieving different
                        </p>
                        <p class="text-[#000] tet-[15px] pt-5">
                            Our team of experts uses a methodology to assess your eligibility<br class="hidden lg:block"> & process the requirements accordingly.
                        </p>
                    </div>
                </div>
            </div> -->
        </section>
    </section>
    <section class="py-6 lg:py-8">
        <div class="container mx-auto px-4">
            <div>
                <h1 class="text-[25px] lg:text-[35px] font-bold leading-tight text-center">EMI Calculator</h1>
                <!-- <p class="text-[#313030] text-center pb-5 w-full mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br>ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p> -->
            </div>
            <div class="mt-10 border border border-slate-300 px-5 py-10 rounded-lg">
                <div class="flex flex-wrap gap-y-8 justify-around">
                    <div class="w-full lg:w-[40%] flex justify-center flex-col">
                        <div>
                            <p class="bg-[#20AA4A] text-[20px] text-center text-white font-[500] px-8 py-3 w-full mb-5">Calculate your EMI</p>
                        </div>
                        <div class="mb-5">
                            <div class="flex justify-between items-center mb-3">
                                <label class="font-[500]" for="loan amoun">Loan Amount</label>
                                <input id="loanAmount" class="bg-[#D4FFE1] text-[#20AA4A] text-center py-2" type="text" value="₹ 0.00" readonly>
                            </div>
                            <input type="range" class="range-slider" value="0" min="0" max="10000000" step="5000" id="loanAmountRange">
                        </div>
                        <div class="mb-5">
                            <div class="flex justify-between items-center mb-3">
                                <label class="font-[500]" for="loan amoun">Interest in p.a</label>
                                <input id="interestRate" class="bg-[#D4FFE1] text-[#20AA4A] text-center py-2" type="text" value="0.5 %" readonly>
                            </div>
                            <input id="interestRange" type="range" class="range-slider" value="0" min="0" max="20" step="0.1">
                        </div>
                        <div class="mb-5">
                            <div class="flex justify-between items-center mb-3">
                                <label class="font-[500]" for="loan amoun">Loan Tenure</label>
                                <input id="loanYear" class="bg-[#D4FFE1] text-[#20AA4A] text-center py-2" type="text" value="1 Yrs" readonly>
                            </div>
                            <input id="loanYearRange" type="range" class="range-slider" value="0" min="0" max="15" step="1">
                        </div>
                       
                    </div>
                    <div class="w-full lg:w-[50%]">
                        <div>
                            <h6 class="text-[23px] text-center font-[400]">*EMI Breakup</h6>
                            <div class="mb-10">
                                <canvas id="myChart" style="width:100%;max-width:600px" class="mx-auto"></canvas>
                            </div>
                            <div class="flex flex-wrap gap-y-5 items-center gap-x-5 justify-center">
                                <div class="text-center">
                                    <p class="font-[400]">Monthly EMI</p>
                                    <p id="monthlyEmi" class="text-[#20AA4A] text-[20px] font-semibold">₹ 0.00</p>
                                </div>
                                <div class="h-[50px] w-[1px] bg-[#b1b1b1]"></div>
                                <div class="text-center">
                                    <p class="font-[400]">Total Interest</p>
                                    <p id="interestAmount" class="text-[#20AA4A] text-[20px] font-semibold">₹ 0.00</p>
                                </div>
                                <div class="h-[50px] w-[1px] bg-[#b1b1b1]"></div>
                                <div class="text-center">
                                    <p class="font-[400]">Principal Amount</p>
                                    <p id="principalAmount" class="text-[#20AA4A] text-[20px] font-semibold">₹ 0.00</p>
                                </div>
                                <div class="h-[50px] w-[1px] bg-[#b1b1b1]"></div>
                                <div class="text-center">
                                    <p class="font-[400]">Total Amount</p>
                                    <p id="totalAmount" class="text-[#20AA4A] text-[20px] font-semibold">₹ 0.00</p>
                                </div>
                            </div>
                            <div class='mt-5'>
                                <p class="text-[#343434] text-center text-[12px]">*Figures displayed are for reference purpose. Calculation might vary as per actual.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 lg:py-8 bg-[#F9F7F7]">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between gap-x-5">
                <div class="w-full md:w-[52%] lg:w-[65%]">
                    <h2 class="text-left text-[25px] lg:text-[40px] font-bold">How is EMI calculated for a business loan?</h2>
                    <p class="text-[#313030] text-left py-5 w-full mx-auto">An equated monthly instalment is the fixed amount you pay every month to repay your entire loan. An EMI consists of both the principal sum 
                    and the interest amount.</p>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">It can be mathematically explained by the following:</p>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">EMI = [P x R x (1+R)^N] [(1+R)^N-1]</p>
                    <p class="text-[#313030] text-left pb-2 w-full mx-auto">Where:</p>
                    <p class="text-[#313030] text-left pb-2 w-full mx-auto">✔ P = Principal amount</p>
                    <p class="text-[#313030] text-left pb-2 w-full mx-auto">✔ R = Monthly Rate of Interest</p>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">✔ N = Loan Tenure in Months</p>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">If you want to avoid the headache of calculating EMI manually, use our business loan EMI calculator, which will do it for you 
                    almost immediately! </p>
                </div>
                <div class="w-full md:w-[45%] lg:w-[30%]">
                    <img src="./assets/img/photos/emi-calcuator.webp" alt="" class="w-full h-full">
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 lg:py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-[25px] lg:text-[40px] font-bold">Benefits of using the EMI Calculator</h2>
            <p class="text-[#313030] text-center py-5 w-full mx-auto">Using the EMI calculator for a business loan is the first step in the ease of planning and managing loans. The benefits are as follows:</p>
            <div class="flex flex-wrap justify-between gap-x-5 gap-y-5">
                <div class="w-full md:w-[30%] lg:w-[30%]">
                    <h2 class="text-[#20AA4A] text-[20px] md:text-[20px] font-semibold leading-none md:leading-tight">Quick & Easy Calculations</h2>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">Calculates EMI within seconds and removes the hassle of manual calculations.</p>
                </div>
                <div class="w-full md:w-[30%] lg:w-[30%]">
                    <h2 class="text-[#20AA4A] text-[20px] md:text-[20px] font-semibold leading-none md:leading-tight">Compare Loan Options</h2>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">Go through various loan amounts, tenures, or interest rates to arrive at the best-suited one.</p>
                </div>
                <div class="w-full md:w-[30%] lg:w-[30%]">
                    <h2 class="text-[#20AA4A] text-[20px] md:text-[20px] font-semibold">Plan Your Finances</h2>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">This tells you how much you will be repaying. This anticipates changes get.</p>
                </div>
                <div class="w-full md:w-[30%] lg:w-[30%]">
                    <h2 class="text-[#20AA4A] text-[20px] md:text-[20px] font-semibold">No Hidden Surprises</h2>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">Find out the total amount you will repay before making a loan application..</p>
                </div>
                <div class="w-full md:w-[30%] lg:w-[30%]">
                    <h2 class="text-[#20AA4A] text-[20px] md:text-[20px] font-semibold">Saves Time</h2>
                    <p class="text-[#313030] text-left pb-5 w-full mx-auto">An EMI calculator saves you from talking with lenders or spreadsheets. Just put in your details, and your result is there in a second.</p>
                </div>
                <div class="w-full md:w-[30%] lg:w-[30%] mt-5 md:mt-0">
                    <div class="bg-[#303030] text-white rounded-[30px]">
                        <p class="text-[#FFF] text-left p-5 w-full mx-auto">Make an informed financial decision quickly with our business loan calculator!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-[#0E1520] py-6 lg:py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-[#FFF] font-bold text-[25px] lg:text-[35px] text-center pb-1">Factors that affect Business Loan EMI</h2>
            <p class="text-[#FFF] text-center pb-5 w-full mx-auto">Several key factors have a bearing on your EMI. Knowledge of the same can help you in acquiring the kind of loan you want.</p>
            <div class="flex flex-wrap justify-between">
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px]">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-7">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">01</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Loan Amount</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">The higher the loan amount, the higher the EMI.<br class="hidden md:hidden lg:block"> Borrow only what you need, and avoid excess on this.</span> 
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px]">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-6">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">02</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Interest Rate</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">A lower interest rate cuts down your EMI. Therefore,<br class="hidden md:hidden lg:block"> check out the payment or the business loan EMI is<br class="hidden md:hidden lg:block"> being calculated using our business loan interest<br class="hidden md:hidden lg:block">calculator to decide on the loan amount.</span> 
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px]">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-6">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">03</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Loan Tenure</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">Longer tenure means lower EMI but higher total <br class="hidden md:hidden lg:block"> interest paid on loan. This means higher EMIs <br class="hidden md:hidden lg:block">and less total interest in case the tenure is shorter.</span> 
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px]">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-6">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">04</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Type of Loan</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">Secured loans usually have much lower EMIs <br class="hidden md:hidden lg:block">than unsecured loans</span> 
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px]">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-6">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">05</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Prepayments & Part-Payments</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">Any additional payment will reduce the outstanding <br class="hidden md:hidden lg:block"> principal of your <a href="">business loan</a>, hence lowering your.<br class="hidden md:hidden lg:block">future EMI.</span> 
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[50%] py-[30px] lg:py-[40px] hidden">
                    <div class="flex justify-start md:ps-10 lg:ps-32 items-start space-x-4">
                        <div class="rounded-full border-[2px] border-[#FFF] border-dashed py-5 px-6">
                            <h2 class="text-[20px] lg:text-[30px] font-semibold stepsText2">06</h2>
                        </div>
                        <div>
                            <h2 class="block font-bold text-white text-[15px] lg:text-[20px]">Business Loan EMI Calculator</h2>
                            <span class="text-[#A8A4A4] text-[12px] lg:text-[15px]">Plan your loan repayment wisely with our<br class="hidden md:hidden lg:block"> <a href="">EMI calculator.</a></span> 
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[#FFF] text-center pb-8 w-full mx-auto">Explore different combinations with our small business loan calculator and choose a repayment plan most appropriate to your business!</p>
        </div>
    </section>
    <section class="py-6 lg:py-8">
        <div class="container mx-auto px-4">
            <div class="mb-5">
                <h2 class="text-center text-[25px] lg:text-[40px] font-bold">Our Partners</h2>
            </div>
            <section id="partner" class="splide loan-slide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/bandhan.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/bob.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/icici.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/idfc.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/kotak.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                        <li class="splide__slide flex justify-center flex-col">
                            <div class="lg:mx-3">
                                <img class="w-full h-full p-2 lg:p-5" src="./assets/img/partner/sbi.webp" alt="" width="200" height="200">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
    <section class="bg-[#FAFAFA] py-6 lg:py-8">
        <div class="container mx-auto px-4">
            <div>
                <h2 class="text-[25px] lg:text-[35px] font-bold leading-tight text-center">Frequently Asked Questions</h2>
            </div>
            <div class="mt-8">
                <div class="flex flex-wrap items-start">
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-1" onclick="toggleAccordion(1)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q1. How can I apply for a business loan with Zyzha?</span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-1" class="overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300"
                                style="max-height: 0px;"> <!-- Set the default max-height -->
                                <div class="py-5">
                                    <p>Applying for a business loan with Zyzha is not only simple but hassle-free as well. You only need to visit our website, fill out the application form, and upload the required documents. Our team will get back to you with an approval decision in no time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <!-- Accordion Item 2 -->
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-2" onclick="toggleAccordion(2)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q2. Does Zyzha offer instant business loans?</span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>Yes, we do! We at Zyzha specialise in instant loans for business owners with a fast approval process. We understand the urgency of your business needs. So, we ensure that you receive the funds quickly to keep things moving.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <!-- Accordion Item 3 -->
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-3" onclick="toggleAccordion(3)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q3. Can I get an MSME loan for a new business?</span>
                                <span id="icon-3" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>Absolutely! You can. Zyzha can provide you with an MSME loan for new business. We help entrepreneurs kickstart their journey with the financial support they need to grow and succeed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-4" onclick="toggleAccordion(4)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q4. What makes Zyzha’s loans for business owners unique?</span>
                                <span id="icon-4" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>Zyzha offers flexible repayment options, competitive interest rates, and personalised loan solutions. That makes our MSME business loans the ideal choice for business owners looking to expand or manage their operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-5" onclick="toggleAccordion(5)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q5. Does EMI remain the same or change in the future?</span>
                                <span id="icon-5" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>It depends on the type of loan. Fixed-rate loans will have the same EMI throughout their lifetime. However, floating-rate loans may have EMIs changing from time to time. It is based on market interest rates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-6" onclick="toggleAccordion(6)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q6. What information do I need to use the calculator?</span>
                                <span id="icon-6" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>To obtain the EMI on a loan, the following inputs need to be given:</p>
                                    <ul>
                                        <li>✔ Principal Amount of the loan</li>
                                        <li>✔ Interest Rate</li>
                                        <li>✔ Term of the loan</li>
                                    </ul>
                                    <p>The calculator will provide the EMI and also the total interest and total repayment amount in a fraction of a second. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-7" onclick="toggleAccordion(7)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q7. Can I change my loan tenure to make my EMI lower?</span>
                                <span id="icon-7" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>It is possible to change the loan tenure on account of a lower EMI. A longer tenure will lower an EMI but will increase the total interest cost paid. A shorter tenure raises the EMI while lowering the total interest cost. Use the business loan EMI calculator to find out what is a good compromise between affordability and repayment efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-[50%] px-1.5">
                        <div class="bg-[#FFFFFF] rounded-lg mb-3">
                            <button id="header-8" onclick="toggleAccordion(8)"
                                class="w-full flex justify-between text-left items-center text-slate-100 transition-colors duration-300 bg-[#F5F5F5]">
                                <span class="text-[15px] md:text-[18px] text-[#000] text-left px-3 leading-tight font-[400]">Q8. Will my EMI change if I make some prepayments?</span>
                                <span id="icon-8" class="text-slate-800 transition-transform duration-300 bg-[#20AA4A] py-6 px-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path fill="white"
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-8" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out px-5 border-b border-slate-300">
                                <div class="py-5">
                                    <p>Yes, whatever prepayment you make or even a part-prepayment will reduce the outstanding amount of your loan's principal. This might adjust either your future EMIs downwards or choose to reduce the repayment period. Some lenders may charge a nominal prepayment fee, so check the clauses that apply before you make early payments. Our small business loan calculator demonstrates how prepayments can affect your EMI.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>

</script>
<?php include('footer.php'); ?>