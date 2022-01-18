class Position{
    public x: number
    public y: number

    constructor(x: number, y: number){
        this.x = x
        this.y = y
    }
}

class Vecteur{
    public origin: Position
    public norme: number
    public angle: number
    
    constructor(origin: Position, norme: number, angle: number) {
        this.origin = origin
        this.norme = norme
        this.angle = angle
    }

    getDestPos = (): Position => {
        return new Position(
            this.origin.x + Math.cos(this.angle) * this.norme,
            this.origin.y + Math.sin(this.angle) * this.norme
        )
    }

    getNormalizeDestPos = (): Position => {
        return new Position(
            this.getDestPos().x / this.norme,
            this.getDestPos().y / this.norme
        )
    }
}

class Dot{
    private x: number
    private y: number
    private v: number
    private size: number

    constructor(x: number, y: number){
        this.x = x
        this.y = y
        this.v = Math.random() * 2 + 0.01
        this.size = Math.random() * 0.1
    }

    getNextPosition = () => {
        return {
            x: this.x - this.v,
            y: this.y - this.v
        }
    }

    computeNextPosition = () => {
        this.setX(this.getNextPosition().x)
        this.setY(this.getNextPosition().y)
    }

    display = (ctx: CanvasRenderingContext2D) => {
        ctx.strokeStyle = 'white'
        ctx.shadowBlur = 20;
        ctx.shadowColor = 'red'
        ctx.lineWidth = 5
        ctx.beginPath()
        ctx.moveTo(this.getX()+this.size, this.getY()+this.size)
        ctx.lineTo(this.getX() + this.getNextPosition().x, this.getY() + this.getNextPosition().y)
        this.computeNextPosition()
        ctx.stroke()
    }

    
    public getX() : number {
        return this.x;
    }
    public getY() : number {
        return this.y;
    }
    public setX(x : number) {
        this.x = x;
    }
    public setY(y : number) {
        this.y = y;
    }
    
}

class Stars{
    private canvas: HTMLCanvasElement
    private ctx: CanvasRenderingContext2D
    private dots: Array<Dot>

    constructor(el: HTMLElement) {
        this.canvas = el as HTMLCanvasElement
        this.ctx = this.canvas.getContext('2d')!
        this.dots = new Array()
        this.ctx.imageSmoothingEnabled = true;
        this.ctx.translate(0, this.canvas.height);
        this.ctx.scale(1, -1);
        for(let i = 0; i < 50; i++){
            this.dots.push(new Dot(Math.random() * this.canvas.width + (this.canvas.width/3), Math.random() * this.canvas.height))
        }
    }

    draw = () => {
        this.ctx.fillStyle = 'dark'
        this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height)
        this.dots.forEach(d => {
            d.display(this.ctx)
            if(d.getX() < 0 || d.getY() > this.canvas.height){
                d.setX(Math.random() * this.canvas.width)
                d.setY(Math.random() * this.canvas.height)
            }
        })
        requestAnimationFrame(this.draw)
    }
}

if(window.innerWidth >= 680){
    const stars = new Stars(document.getElementById('stars')!)
    stars.draw()
}