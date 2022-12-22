<div class="modal fade" id="modalShowKonfirmTarif" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-950px">
        <div class="modal-content">
            <div class="modal-header" id="modalShowKonfirmTarif_header">
                <h2 class="fw-bolder" id="titleShowKonfirmTarif"></h2>
            </div>

            <form id="frxx_tarifKonfim" name="frxx_tarifKonfim" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body mx-5">
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="modalShowKonfirmTarif_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modalShowKonfirmTarif_header" data-kt-scroll-wrappers="#modalShowKonfirmTarif_scroll" data-kt-scroll-offset="300px">
                        <div class="row mb-5">
                            <div class="col-md-12" hidden>
                                <div class="mb-5">
                                    <label class="form-label">Nomor</label>
                                    <input type="text" class="form-control form-control-solid" name="kode_import_tarif" id="kode_import_tarif" placeholder="Nomor" readonly />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-5">
                                    <label class="required form-label">Apakah Data Yang Diupload Tarif Sudah Benar ?</label>
                                    <select class="form-select form-select-solid" data-control="select2" name="mth_final" id="mth_final" data-dropdown-parent="#modalShowKonfirmTarif" data-placeholder="Pilih konfirmasi" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                    <span class="text-danger error-text mth_final_err"></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-rounded table-striped border align-middle gy-5 gs-5" id="showTarif">
                                <thead>
                                    <tr class="fw-bold text-gray-800 border-bottom border-gray-200 text-center align-middle">
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Usia (Tahun)</th>
                                        <th colspan="71">Tarif</th>
                                    </tr>
                                    <tr class="fw-bold text-gray-800 border-bottom border-gray-200 text-center align-middle">
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td>32</td>
                                        <td>33</td>
                                        <td>34</td>
                                        <td>35</td>
                                        <td>36</td>
                                        <td>37</td>
                                        <td>38</td>
                                        <td>39</td>
                                        <td>40</td>
                                        <td>41</td>
                                        <td>42</td>
                                        <td>43</td>
                                        <td>44</td>
                                        <td>45</td>
                                        <td>46</td>
                                        <td>47</td>
                                        <td>48</td>
                                        <td>49</td>
                                        <td>50</td>
                                        <td>51</td>
                                        <td>52</td>
                                        <td>53</td>
                                        <td>54</td>
                                        <td>55</td>
                                        <td>56</td>
                                        <td>57</td>
                                        <td>58</td>
                                        <td>59</td>
                                        <td>60</td>
                                        <td>61</td>
                                        <td>62</td>
                                        <td>63</td>
                                        <td>64</td>
                                        <td>65</td>
                                        <td>66</td>
                                        <td>67</td>
                                        <td>68</td>
                                        <td>69</td>
                                        <td>70</td>
                                        {{-- <td>71</td>
                                        <td>72</td>
                                        <td>73</td>
                                        <td>74</td>
                                        <td>75</td>
                                        <td>76</td>
                                        <td>77</td>
                                        <td>78</td>
                                        <td>79</td>
                                        <td>80</td>
                                        <td>81</td>
                                        <td>82</td>
                                        <td>83</td>
                                        <td>84</td>
                                        <td>85</td>
                                        <td>86</td> --}}
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-sm" id="btnTarifKonfim_simpan"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>