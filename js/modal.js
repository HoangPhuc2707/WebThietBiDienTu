const listImage = document.querySelector('.list-images')
const imgs = document.getElementsByClassName('img')
const btnLeft = document.querySelector('.btn-left')
const btnRight = document.querySelector('.btn-right')
const length = imgs.length
let demsoanh = 0
const handleChangeSlide = () => {
    if (demsoanh == length - 1){
        demsoanh = 0
        let width = imgs[0].offsetWidth
        listImage.style.transform = `translateX(0px)`
    }else{
        demsoanh ++
        let width = imgs[0].offsetWidth
        listImage.style.transform = `translateX(${width  * -1 * demsoanh}px)`
    }
}
let handleEventChangeSlide = setInterval(handleChangeSlide, 3000)

btnRight.addEventListener('click', () => {
    clearInterval(handleEventChangeSlide)
    handleChangeSlide()
    handleEventChangeSlide = setInterval(handleChangeSlide, 3000)
})
 btnLeft.addEventListener('click', () => {
    clearInterval(handleEventChangeSlide)
    if (demsoanh == 0){
        demsoanh = length -1
        let width = imgs[0].offsetWidth
        listImage.style.transform = `translateX(${width  * -1 * demsoanh}px)`
    }else{
        demsoanh --
        let width = imgs[0].offsetWidth
        listImage.style.transform = `translateX(${width  * -1 * demsoanh}px)`
    }
    handleEventChangeSlide = setInterval(handleChangeSlide, 3000)
 })