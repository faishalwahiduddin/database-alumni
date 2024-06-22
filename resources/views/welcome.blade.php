<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Alumni</title>
    @vite('resources/css/app.css')
    <style>
        .aspect-3-4 {
            aspect-ratio: 3 / 4;
            width: 150px;
            /* Adjust width as needed */
            height: 200px;
            /* Adjust height as needed */
        }
    </style>
</head>

<body class="bg-gray-100 p-10">

    <div class="max-w-5xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Update Data Alumni</h1>

        <!-- Profile Picture Section -->
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-700" for="profile_picture">Profile Picture:</label>
            <div class="flex items-center mb-4">
                <img id="profileImagePreview"
                    src="{{ old('profile_picture') ? asset('storage/' . old('profile_picture')) : 'https://via.placeholder.com/150' }}"
                    alt="Profile Picture" class="aspect-3-4 rounded-lg object-cover">
            </div>
            <div class="flex space-x-4">
                <label
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 cursor-pointer">
                    Take from Camera
                    <input accept="image/*" capture="camera" id="profile_picture_camera" name="profile_picture_camera"
                        class="hidden">
                </label>
                <label
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300 cursor-pointer">
                    Upload from Device
                    <input type="file" accept="image/*" id="profile_picture_upload" name="profile_picture_upload"
                        class="hidden">
                </label>
            </div>
        </div>
        <!-- Data Diri Section -->
        <h2 class="text-2xl font-semibold mb-4">Data Diri</h2>
        <form action="#" method="POST">
            @csrf
            <!-- Nama Lengkap and Birthday -->
            <div class="grid grid-cols-1 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="full_name">Nama Lengkap:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="full_name" name="full_name">
                </div>
                {{-- <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="birthday">Birthday:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="date" id="birthday" name="birthday">
                </div> --}}
            </div>

            <!-- Alamat -->
            {{-- <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-700" for="address">Alamat:</label>
                <textarea class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" id="address"
                    name="address" rows="4"></textarea>
            </div> --}}

            <!-- Provinsi, City, Postalcode -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="province">Provinsi:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="province" name="province">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="city">City:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="city" name="city">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="postalcode">Postalcode:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="postalcode" name="postalcode">
                </div>
            </div> --}}

            <!-- Email and No. Handphone -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="email">Email:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="email" id="email" name="email">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="phone">No. Handphone:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="phone" name="phone">
                </div>
            </div>

            <!-- Data Akademik Section -->
            <h2 class="text-2xl font-semibold mb-4">Data Akademik</h2>
            <div class="grid grid-cols-1 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="nim">Nomor Pokok
                        Mahasiswa:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="nim" name="nim">
                </div>
                {{-- <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="nia">Nomor Induk
                        Alumni:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="nia" name="nia">
                </div> --}}
            </div>
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="education_level">Tingkat
                        Pendidikan:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="education_level" name="education_level">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="major">Jurusan:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="major" name="major">
                </div>
            </div> --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="program_study">Program
                        Studi:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="program_study" name="program_study">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="entry_year">Tahun Masuk:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="entry_year" name="entry_year">
                </div>
                {{-- <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="graduation_year">Tahun
                        Lulus:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="graduation_year" name="graduation_year">
                </div> --}}
            </div>

            <!-- Data Kerja Section -->
            <h2 class="text-2xl font-semibold mb-4">Data Kerja</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="company">Perusahaan:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="company" name="company">
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-700" for="position">Posisi:</label>
                    <input
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                        type="text" id="position" name="position">
                </div>
            </div>

            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300"
                type="submit">Simpan Data</button>
        </form>
    </div>

    @vite('resources/js/app.js')
    <!-- JavaScript for handling camera input -->
    <script>
        document.getElementById('profile_picture_camera').addEventListener('change', function(event) {
            const fileInput = event.target;
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImagePreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Function to start the camera and capture the image
        async function startCamera() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                const video = document.createElement('video');
                video.srcObject = stream;
                video.play();

                const cameraOverlay = document.createElement('div');
                cameraOverlay.style.position = 'fixed';
                cameraOverlay.style.top = 0;
                cameraOverlay.style.left = 0;
                cameraOverlay.style.width = '100%';
                cameraOverlay.style.height = '100%';
                cameraOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
                cameraOverlay.style.display = 'flex';
                cameraOverlay.style.justifyContent = 'center';
                cameraOverlay.style.alignItems = 'center';
                cameraOverlay.appendChild(video);

                const captureButton = document.createElement('button');
                captureButton.innerText = 'Capture';
                captureButton.style.position = 'absolute';
                captureButton.style.bottom = '20px';
                captureButton.style.backgroundColor = 'white';
                captureButton.style.padding = '10px 20px';
                captureButton.style.border = 'none';
                captureButton.style.borderRadius = '5px';
                captureButton.style.cursor = 'pointer';
                cameraOverlay.appendChild(captureButton);

                document.body.appendChild(cameraOverlay);

                captureButton.addEventListener('click', () => {
                    const canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    const context = canvas.getContext('2d');
                    context.drawImage(video, 0, 0, canvas.width, canvas.height);
                    document.getElementById('profileImagePreview').src = canvas.toDataURL('image/png');

                    stream.getTracks().forEach(track => track.stop());
                    document.body.removeChild(cameraOverlay);
                });
            } catch (error) {
                console.error('Error accessing the camera', error);
            }
        }

        document.getElementById('profile_picture_camera').addEventListener('click', startCamera);
    </script>

</body>

</html>
