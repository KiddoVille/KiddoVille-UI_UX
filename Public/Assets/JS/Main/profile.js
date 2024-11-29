    let map, directionsService, directionsRenderer;
        let userLocation = null; // To store the current live location
        const destination = { lat: 6.90224024303256953, lng: 79.86109020 }; // Destination coordinates

        function initMap() {
            // Initialize the map centered at the destination
            map = new google.maps.Map(document.getElementById('map'), {
                center: destination,
                zoom: 14
            });

            // Initialize DirectionsService and DirectionsRenderer
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();

            // Bind the DirectionsRenderer to the map
            directionsRenderer.setMap(map);

            // Add a marker at the destination
            new google.maps.Marker({
                position: destination,
                map: map,
                title: "Destination"
            });

            // Start tracking the user's location and updating the route
            trackLiveLocation();
        }

        function trackLiveLocation() {
            if (!navigator.geolocation) {
                alert("Geolocation is not supported by your browser.");
                return;
            }

            // Continuously update the user's location and route
            setInterval(() => {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        userLocation = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        console.log("Updated location:", userLocation);

                        userLocationMarker = new google.maps.Marker({
                            position: userLocation,
                            map: map,
                            title: "Your Location",
                            icon: {
                                url: "https://img.icons8.com/ios-filled/50/000000/car.png", // Car icon URL
                                scaledSize: new google.maps.Size(42, 42) // Adjust size as necessary
                            },
                            zIndex: 999
                        });

                        // Recalculate the route using the updated location
                        calculateAndDisplayRoute(userLocation, destination);
                    },
                    (error) => {
                        console.error("Error getting location:", error.message);
                        alert("Error retrieving your location.");
                    }
                );
            }, 5000); // Update every 5 seconds
        }

        function calculateAndDisplayRoute(origin, destination) {
            // Request a route from origin to destination
            directionsService.route(
                {
                    origin: origin,
                    destination: destination,
                    travelMode: google.maps.TravelMode.DRIVING
                },
                (response, status) => {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsRenderer.setDirections(response);
                    } else {
                        alert("Failed to display directions: " + status);
                    }
                }
            );
        }

document.addEventListener("DOMContentLoaded", function () {
    const enrichPhoto = document.querySelector('.Enrich-photo');
    const clock = document.querySelector('.clock');
    const circle = document.querySelector('.task');
    const mission = document.querySelector('.mission');
    // to animate on page navigation and image animation

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                enrichPhoto.classList.add('animate');

                enrichPhoto.addEventListener('animationend', () => {
                    enrichPhoto.classList.remove('animate');
                }, { once: true });

                if (entry.target === clock) {
                    clock.classList.add('animate-from-left');
                    clock.addEventListener('animationend', () => {
                        clock.classList.remove('animate-from-left');
                    }, { once: true });
                }

                if (entry.target === circle) {
                    circle.classList.add('animate-from-right');
                    circle.addEventListener('animationend', () => {
                        circle.classList.remove('animate-from-right');
                    }, { once: true });
                }

                if (entry.target === mission) {
                    mission.classList.add('animate-from-left');
                    mission.addEventListener('animationend', () => {
                        mission.classList.remove('animate-from-left');
                    }, { once: true });
                }
            }
        });
    });

    observer.observe(enrichPhoto);
    observer.observe(clock);
    observer.observe(circle);
    observer.observe(mission);

    const fadeInElements = document.querySelectorAll('.fade-in');

    // Create an Intersection Observer
    const observer1 = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Add 'visible' class to fade in
            } else {
                entry.target.classList.remove('visible'); // Remove 'visible' class to fade out
            }
        });
    });

    // Observe each fade-in element
    fadeInElements.forEach(element => {
        observer1.observe(element);
    });
});