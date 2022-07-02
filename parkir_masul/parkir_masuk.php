<style>
.z-1 {
    z-index: 1;
}

.origin-0 {
    transform-origin: 0%;
}

input:focus~label,
input:not(:placeholder-shown)~label,
textarea:focus~label,
textarea:not(:placeholder-shown)~label,
select:focus~label,
select:not([value='']):valid~label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
}

input:focus~label,
select:focus~label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
}
</style>

<div class="h-[50.6rem] bg-gray-100 p-0 sm:p-12">
    <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl relative">
        <h1 class="text-2xl font-bold mb-8">PARKIR MASUK</h1>
        Empty : <?= $cek_sisa ?>
        <form id="form" novalidate method="post" action="simpan_parkir.php">
            <div class="relative z-0 w-full mb-4">
                <input type="text" name="no_kendaraan" id="no_kendaraan" placeholder=" " required
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">No Kendaraan</label>
                <span class="text-sm text-red-600 hidden" id="error">No Kendaraan</span>
            </div>

            <div class="relative z-0 w-full mb-5">
                <input type="text" name="tempat_parkir" id="tempat_parkir" placeholder=" "
                    class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                <label for="password" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Tempat
                    Parkir</label>
                <span class="text-sm text-red-600 hidden" id="error">Tempat Parkir is required</span>
            </div>

            <fieldset class="relative z-0 w-full p-px mb-5">
                <legend class="absolute text-gray-500 transform scale-75 -top-3 origin-0">Jenis Kendaraan</legend>
                <div class="block pt-3 pb-2 space-x-4">
                    <label>
                        <input type="radio" name="jenis_kendaraan" value="Motor" id="radio1"
                            class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black" />
                        Motor
                    </label>
                    <label>
                        <input type="radio" name="jenis_kendaraan" value="Mobil" id="radio2"
                            class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black" />
                        Mobil
                    </label>
                    <label>
                        <input type="radio" name="jenis_kendaraan" value="Lainnya" id="radio3"
                            class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black" />
                        Lainnya
                    </label>
                </div>
                <span class="text-sm text-red-600 hidden" id="error">Option has to be selected</span>
            </fieldset>
    </div>
    <input id=" " type="submit" name="btn_masuk" value="Submit"
        class=" ml-[25rem] w-[30rem] px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-pink-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none" />
    </form>
    <a href="index.php" type="btn" class="bg-dark">button</a>
</div>
</div>

<script>
'use strict'

document.getElementById('button').addEventListener('click', toggleError)
const errMessages = document.querySelectorAll('#error')

function toggleError() {
    // Show error message
    errMessages.forEach((el) => {
        el.classList.toggle('hidden')
    })

    // Highlight input and label with red
    const allBorders = document.querySelectorAll('.border-gray-200')
    const allTexts = document.querySelectorAll('.text-gray-500')
    allBorders.forEach((el) => {
        el.classList.toggle('border-red-600')
    })
    allTexts.forEach((el) => {
        el.classList.toggle('text-red-600')
    })
}
</script>