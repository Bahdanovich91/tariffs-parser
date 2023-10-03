<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container py-3" bis_skin_checked="1">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom" bis_skin_checked="1">
                <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                    <span class="fs-4">Pricing example</span>
                </a>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center" bis_skin_checked="1">
                <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
                <p class="fs-5 text-body-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias assumenda deserunt fugiat nobis nostrum reiciendis soluta suscipit ullam. Ab commodi ducimus eveniet itaque non quas quo sequi vel veritatis voluptatem.
                </p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center" bis_skin_checked="1">
                @foreach($tariffs as $tariff)
                    <div class="col" bis_skin_checked="1">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary" bis_skin_checked="1">
                            <div class="card-header py-3 text-bg-primary border-primary" bis_skin_checked="1">
                                <h4 class="my-0 fw-normal">{{ $tariff->name }}</h4>
                            </div>
                            <div class="card-body" bis_skin_checked="1">
                                <h1 class="card-title pricing-card-title">{{ $tariff->price }}<small class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>30 users included</li>
                                    <li>15 GB of storage</li>
                                    <li>Phone and email support</li>
                                    <li>{{ $tariff->description }}</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</body>
</html>