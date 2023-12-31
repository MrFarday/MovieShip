<x-guest-layout>
     <div class="container mx-auto">
         <div class="bg-white border border-4 rounded-lg shadow relative m-10">
             <div class="flex items-start w-full justify-between p-5 border-b rounded-t">
                 <h3 class="text-xl font-semibold">
                     Tambah Film
                 </h3>
                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="product-modal">
                     <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                     </svg>
                 </button>
             </div>

          <div class="p-6 space-y-6">
              <form action="{{ route('dashboard.film.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-full">
                          <label for="title" class="text-sm font-medium text-gray-900 block mb-2">Title</label>
                          <input type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan title....”" required="">
                      </div>
                      <div class="col-span-full">
                          <label for="description" class="text-sm font-medium text-gray-900 block mb-2">Deskripsi</label>
                          <textarea id="product-details" rows="6" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="Deskripsi ..." name="description"></textarea>
                      </div>
                      <div class="col-span-2">
                         <label for="release_year" class="text-sm font-medium text-gray-900 block mb-2">Tahun Rilis</label>
                         <input type="year" name="release_year" id="release_year" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Tahun Liris....”" required="">
                     </div>
                     <div class="col-span-2">
                         <label for="length" class="text-sm font-medium text-gray-900 block mb-2">Durasi Film</label>
                         <input type="text" name="length" id="length" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Durasi Film....”" required="">
                     </div>
                     <div class="col-span-2">
                         <label for="rating" class="text-sm font-medium text-gray-900 block mb-2">Rating</label>
                         <select name="rating" id="rating" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full py-2.5 px-3">
                             <option value="G">G</option>
                             <option value="PG">PG</option>
                             <option value="PG-13">PG-13</option>
                             <option value="R">R</option>
                             <option value="NC-17">NC-17</option>
                         </select>
                     </div>
                      <div class="col-span-full">
                          <label for="thumbnail" class="text-sm font-medium text-gray-900 block mb-2">Thumbnail</label>
                          <input type="file" name="thumbnail" id="thumbnail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Thumbnail" required="">
                      </div>
                  </div>
                  <div class="p-6 border-t border-gray-200 rounded-b">
                      <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit" name="submit">Tambah Film</button>
                  </div>
              </form>
          </div>


      </div>
</x-guest-layout>

