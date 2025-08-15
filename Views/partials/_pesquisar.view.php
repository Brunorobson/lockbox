                    <div class="flex space-x-4">
                        <form action="/notas" class="w-full flex items-center gap-2">
                            <label class=" input input-bordered flex items-center gap-2 w-full">
                                <input type="text" name="pesquisar" class="grow" placeholder="Pesquisar notas no Lockbox..."
                                    value="<?= isset($_GET['pesquisar']) ? $_GET['pesquisar'] : '' ?>" />
                                <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <g
                                        stroke-linejoin="round"
                                        stroke-linecap="round"
                                        stroke-width="2.5"
                                        fill="none"
                                        stroke="currentColor">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </g>
                                </svg>
                            </label>
                            <a href="/notas/criar" class="btn btn-primary text-black">+ Item</a>
                        </form>
                    </div>