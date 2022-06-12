@extends('layouts.base')

@section('template_title')
    Invoice
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="float-right">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACGElEQVRoge3YvWsTcRzH8VfboKIiSBVEVJAOjiJKRRBRFwU3lw5uUvon2KGji/9CBxcRdNHJRdGCVHwapIuTICriEyKIgthK43C/mFyappfkLnep94aDkHwfPp/7/e6bu6MkEfswh/vh80ByEp9QDcdXnMlVUYcMYQZ/RAbuhKMavpsJMYVmG26JRC/jCoZFwqfFzW3PSeOaHMQr9W10tkXMKXwOMW9xpG/qEnIBP0UCX2B/m9i9eBpif+Fiw2/VVY7MqYi2T63hNWxOkLcRsw15s9ggJyN78Fj9zE52UWMy5FbxxErhmRs5gY+hyTsc7aHWIbzWegUyMzKES1gKDe5iNIW6o6FWTfh06JWJkebRehkjKdYfCTWXQ4/bMjByAC9D0e84n2bxJs7hmwwu9gn8CAUXMJZW4TaMhV41IxO9FGserdexpUeBnbAJVxv610Z0R+zEg1BgSXTx5cUUfgct89idNPE4PoTE9ziWhboOOYw3Ik1fcHqthCkshoSH2JWlug7ZgXviu2TFXfRW3BSfFJX+aUxMRVzjDZH2fzxXH619u1Hrkpq+mtZnRM8KRNtpAeO5SOuOcZHmxdUCBmVFYgy3CBxISiNFY90YSfO/otsBkcqroXJF2pD0DKc64tfNipRGikZppGiURopGaaRolEaKRmmkaJRGisa6MdLqIajI77QaiWlvtSKP+iSkF+bzFlDy3/AXWYWcPdCUBCUAAAAASUVORK5CYII="/><br>
                                <a class="btn btn-primary" href="{{ route('dashboard') }}">Home</a>
                            </div>
                            <span id="card_title" style="color:#82adfd; font-size: 50px">
                                {{ __('Invoices') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('invoices.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New Invoice') }}
                                </a>
                                 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAE7ElEQVRoge2aXWxURRTHfy2lRSgiai1V109MofRBEaPxodEEY0QSNRR9Ux+QqEGFFyIRI/pgTPQF5UXRh5YmJrVGxUSJRgMCfsWPkGiICBU/IiZtqW0p2u7a9eF/rvfu3Xvv3rvb3TWk/2Ry25kzZ/5nPs6cmVmYwZmL+4HjQD/wNHB+gMx5VnYc+Am4r2LsYuI2YArIetIpYDuQApqBbcCfPpkp4I4q8A1EChhExB4AlgHdQNryJixlLa/bZNZZ3qDpqCrqgP2I0Ou+skvRiJxGhnQDV/lkuqzu50B9KURqEshebUQagdnAQuAa4B7gMHAdMB5Qr8W+JwLKGoEvgaVAL/ANMIxG7hRwBDiUgGNBvETu3PamcaC9BN3tpiNM/4txlMQZkcuRJxoG+qzRCWAEyABfAJ8k456HDuB6NFUXAA3APKATjfyVxqEkdKKe6SpVURFw1tDaQoK1MZS12fdwKYyKhNPm0kKCcQxxlMwYUgJiGxKFFuBltKAn0EKsNGYBf6MIoBe4JEnlBuBxYBQttBFg4zQTTIJHjUMWGAO2AHMKVVoC/GiV/gFeAxaVj2NsNAM7Eacs4rgkqsKHJngAuLbc7IrActyQ6IMowaMmdHEFSBWLFOJ41Jvp91oH7bu6EoyKxO32/TRKaDWy9qOy0ykeHyOOkZ09GxhCi6olSrBKaEbbwTDyrv/BP7XSwG7LvzNEWRb4DQVzDjZYvlcmKAEcQ9G0g4etbL0nrw95Jj/WoL3lHbS3hRoCOgiBzhdhuAh4IaIcK1/hSyBvc5NH7lZkyEr7vwZFw+8H6HQ86emAshysQEM3jkLnIGSBPWi3XWV5QSPyWEj9u6xuEzoVjqLT5SDq2Harvyqg7hXGLUNER9cBX5uSzWFCVr4Bhdi/A+eGGOJPu6zsbGASHQ9uNlIp1MvLgUeAv4C5Ie1vNn2H0JoOFfiW6LjKMWQhWitdIYY8g3rQSRd4yg8CO4DncF3+HuPQZ3+Hoc44BnZ4A/IEkUPmMwQ0/FPWcNypBfAU8J0R2mJ5G1FkMVCgLsYxA5zEd2lxjhEaonBs5TUEFI95vZIj8zxanN7k4EZrbwr3vN+KG0u1FuCwyIyYQlM1B2+ZkiNE3zP5DVkA/BJgSJj7BU2PYXTb6EU/cs9RSAE/mL43gwTmIteYBX4GFhdQWA1chhsP7gXmhwk2AG+b4AlKu+aZbrQCvyJu7wFnFapQj4YsC+wrK7Vk2Is7nfJuJYN29kncS7GR8vFKjFH7bkcccxB2+dBk34FyMCoSDpemoMIZQ6qAQfsmMmSefdPTTqd4OOuiMUmltchDZIDPgCfRzpzkGaJU1FibW41Dxjh1JlWyFYUB3p35DxTslRs70D7mbfsk8ESxCmehXtkGfIX7TthRKtMIdOCSP4bc7UpCQvZisckaeGM6lfrQa21sKmMbzEebZJry3H1diBb1GApGYyPObbwXY0APil4f9JXNQa9OdxfQW4veHW8gP156CE2hXVQgqmhDa2UAHUtfQY+Yk7hzezcB5wTLe9cjl0aHq53osnrAdLcF1C0Lesg/a4yht0QnQv2e3KPAYsvLmsw+q+PX010RCwx16McBz6KfYSxDHg50iXbASA0Bt1gawr0gbzbZWtT795qudVTnHSYU9cCr5Pd2DzHeNv6PWI+Os/3k3iTO4IzHvzKvcsT8SwsnAAAAAElFTkSuQmCC"/>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Buy by</th>
										<th>Invoice Date</th>
										<th>Billing Address</th>
										<th>Billing City</th>
										<th>Billing State</th>
										<th>Billing Country</th>
										<th>Billing Postal Code</th>
										<th>Total</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoice)
                                        <tr>
											<td>{{ ucfirst($invoice->customer->lastname)}}</td>
											<td>{{date('d-m-Y', strtotime($invoice->invoice_date))}}</td>
											<td>{{ $invoice->billing_address }}</td>
											<td>{{ $invoice->billing_city }}</td>
											<td>{{ $invoice->billing_state }}</td>
											<td>{{ $invoice->billing_country }}</td>
											<td>{{ $invoice->billing_postal_code }}</td>
											<td>{{ $invoice->total }}€</td>

                                            <td>
                                                <form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('invoices.show',$invoice->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('invoices.edit',$invoice->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $invoices->links() !!}
            </div>
        </div>
    </div>
@endsection
