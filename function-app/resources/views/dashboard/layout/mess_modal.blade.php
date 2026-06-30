<!-- Button trigger modal -->
                                <button type="button" id_attr="{{$value['id']}}" class="btn btn-primary view_ms" data-toggle="modal" data-target="#exampleModal{{$value['id']}}">
                                    show message
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$value['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title fs-5" id="exampleModalLabel">{{$value['name']}} message:</h4>
                                            </div>
                                            <div class="modal-body">
                                                {{$value['message']}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
