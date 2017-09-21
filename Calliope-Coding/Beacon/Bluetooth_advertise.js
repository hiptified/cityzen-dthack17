basic.forever(() => {
    basic.pause(100)
    led.plot(2, 2)
})
bluetooth.advertiseUrl(
    "https://dthack17.42656e.com/index.php?id=1",
    7,
    false
)
