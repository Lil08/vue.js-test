const image = (name, descr, price, image) => ({name, descr, price, image})
const images = [
    image('First', 'big description big description big description big description', 1000, 'images/1.jpg'),
    image('Second', 'little description little description', 500, 'images/2.jpg'),
    image('Third', 'big description big description big description big description', 4000, 'images/3.jpg')
]
new Vue({
    el:'#app',
    data:{
        images: images,
        image: images[0],
        selectedImageIndex: 0,
        hidePrice: false
    },
    methods:{
        selectImage: function (index){
            this.image = images[index]
            this.selectedImageIndex = index
        }
    }
})