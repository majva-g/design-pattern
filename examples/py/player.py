from abc import ABC, abstractmethod

 

 

# ----- State Interface -----

class State(ABC):

    @abstractmethod

    def play(self, player):

        pass

 

    @abstractmethod

    def pause(self, player):

        pass

 

    @abstractmethod

    def stop(self, player):

        pass

 

 

# ----- Concrete States -----

class PlayingState(State):

    def play(self, player):

        print("Already playing 🎶")

 

    def pause(self, player):

        print("Pausing the music ⏸️")

        player.set_state(PausedState())

 

    def stop(self, player):

        print("Stopping the music ⏹️")

        player.set_state(StoppedState())

 

 

class PausedState(State):

    def play(self, player):

        print("Resuming the music ▶️")

        player.set_state(PlayingState())

 

    def pause(self, player):

        print("Already paused ⏸️")

 

    def stop(self, player):

        print("Stopping from paused state ⏹️")

        player.set_state(StoppedState())

 

 

class StoppedState(State):

    def play(self, player):

        print("Starting the music ▶️")

        player.set_state(PlayingState())

 

    def pause(self, player):

        print("Cannot pause, music is stopped ❌")

 

    def stop(self, player):

        print("Already stopped ⏹️")

 

 

# ----- Context -----

class MediaPlayer:

    def __init__(self):

        self.state = StoppedState()  # Initial state

 

    def set_state(self, state: State):

        self.state = state

 

    def play(self):

        self.state.play(self)

 

    def pause(self):

        self.state.pause(self)

 

    def stop(self):

        self.state.stop(self)

 

 

# ----- Usage -----

if __name__ == "__main__":

    player = MediaPlayer()

 

    player.play()   # Starting the music ▶️

    player.pause()  # Pausing the music ⏸️

    player.play()   # Resuming the music ▶️

    player.stop()   # Stopping the music ⏹️

    player.pause()  # Cannot pause, music is stopped ❌